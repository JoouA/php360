<?php
header("Content-Type:text/html;charset=utf-8");
class sprite{
	public function downImages($url,$path = 'images/'){
		if (!is_dir($path)) {
			mkdir($path,'0777');
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		$file = curl_exec($ch);
		curl_close($ch);
        $this->save($url,$file,$path);
	}
	private function save($url, $file, $path=''){
        $filename = pathinfo($url, PATHINFO_BASENAME);
        $resource = fopen($path . $filename, 'a');
        fwrite($resource, $file);
        fclose($resource);
    }
    public function getContent($url){
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		$file = curl_exec($ch);
		$this->save($url,$file);
    }
}

$sprite = new sprite();
// $sprite->getContent('http://sc.chinaz.com/tupian/renti.html');
// die();
$filename = pathinfo('www.baidu.com',PATHINFO_BASENAME); //www.jianshu.com
$fp = fopen($filename, 'r');
$images = array();
while (!feof($fp)) {
	$str =  fgets($fp);
	$pattern = '/<img(.*?)src="(.*?)"(.*?)\/?>/i';
	preg_match($pattern, $str,$out);
	if (!empty($out)) {
		$pic = $out[2];
		array_push($images, $pic);
	}
	
}

$newImages = array();

foreach ($images as $key => $value) {
	$pattern = '/(.*?'.'(png|jpg'.'))'.'.*?/i';
	preg_match($pattern, $value,$out);
	if (!empty($out[0])) {
		@$pic = $out[0];
	}
	$newImages[$key] = $pic;
}
print_r($newImages);

foreach ($newImages as  $url) {
	$sprite->downImages($url);
}


?>