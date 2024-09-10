<?php

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A {

}

$a1 = new A();
$b1 = new B();

$a1->foo(); //1
$b1->foo(); //2
$a1->foo(); //3
$b1->foo(); //4