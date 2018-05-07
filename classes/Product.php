<?php

abstract class ProductBasic {

  abstract public function getName();

  abstract public function setName($n);

  abstract public function setPrice($number);

  abstract public function getPrice();

  abstract public function description();
}

class Product extends ProductBasic {

  public $a; //Eigenschaft
  protected $price;
  protected $name;

  public function __construct($name, $price) {
    $this->setName($name);
    $this->setPrice($price);
  }

  public function description() {
    return sprintf('%s (%s €)', $this->name, $this->price);
  }

  public function getName() {
    return $this->name;
  }

  public function setName($n) {
    $this->name = $n;
  }

  public function setPrice($number) {
    $this->price = $number;
  }

  public function getPrice() {
    return $this->price;
  }

  public function calcBrutto() {
    $this->price = $this->calc($this->price);
  }

  private function calc(float $x) {
    return $x * 1.19;
  }
}

class Water extends Product {

  private $volume;

  public function __construct($n, $p, $v) {
    parent::__construct($n, $p);
    $this->setVolume($v);
  }
  public function setVolume($param) {
    $this->volume = $param;
  }

  public function getVolume() {
    return $this->volume;
  } 
  public function description() {
    return sprintf('%s (%s ml): %s €', $this->name, $this->volume, $this->price);
  } 

}

class Clothes extends Product {

  private $amount;
  private $size;
  private $material;
  private $color;

  public function setColor($c) {
    $this->color = $c;
  }

  public function getColor() {
    return $this->color;
  }

}

$tshirt = new Clothes("T-Shirt", "XXL");
$tshirt->setName('T-Shirt XXXL');
$tshirt->setColor('pink');
echo '<hr>';

echo $tshirt->getName() . ' hat die Farbe: ' . $tshirt->getColor();

echo '<hr>';
$article = new Product("Grüne Minna", 12);
$article->setName('Gurke');
$article->setPrice(0.99);
$article->calcBrutto();
echo $article->getName() . ' kostet ' . $article->getPrice();

echo '<hr>';

$article2 = new Product("Rote Zora", 1.30);
$article2->setName('Tomaten 1kg');
$article2->setPrice(4.99);
$article2->calcBrutto();
echo $article2->getName() . ' kostet ' . $article2->getPrice();
$p = new Water("BIG_FOOT_MEGA_SPARKLING", 100, 8900);
$p->setName('BigFootMegaLite');
$p->setPrice(3467.99);
$p->setVolume(100);
echo "<hr>" . $p->description();

