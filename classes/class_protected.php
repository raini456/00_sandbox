<?php

class Eltern {

  protected $a = 'a';
  protected $b = 'b';

  function __construct() {
    ;
  }

  public function setA($param) {
    $this->a = $param;
  }

  public function getA() {
    return $this->a;
  }

  protected function join() {
    return $this->a . ": " . $this->b."\n<br>";
  }

  public function getAB() {
    return $this->join();
  }

}

$dad = new Eltern();
$dad->getA();
$mom = new Eltern();
echo $mom->getAB();

class Kind extends Eltern {

  function __construct() {
    ;
  }

  public function getParentA() {
    return $this->a;
  }
  public function getParentAB() {
    return $this->join();
  }

}

$kid = new Kind();
echo $kid->getParentA()."<br>";
echo $kid->getParentAB();
$kid->setA("xxxx");
echo $kid->getParentAB();
