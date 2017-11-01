<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

$talker = new Talker();
$talker->smallTalk();  // b
$talker->bigTalk();  // A

echo "\n";

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
} 

$someTalk = new Aliased_Talker();
$someTalk->smallTalk(); // b
$someTalk->bigTalk(); // A
$someTalk->talk(); // B


 ?>