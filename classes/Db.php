<?php

class Db {

 public $a = 1;//Eigenschaft
 private $price = 100;
 
 public function setPrice(float $number) {
  $this->price = $number;
 }
 public function getPrice() {
  return $this->price;
 }
 public function calcBrutto() {
  $this->price = $this->calc($this->price);
 }
 private function calc(float $x) {
  return $x*1.19;
 }

}

$conn = new Db();
$conn->setPrice(1000);
//echo $conn->getPrice();
$conn->calcBrutto();
echo $conn->getPrice();

