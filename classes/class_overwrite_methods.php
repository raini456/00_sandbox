<?php
class Eltern{
  public function shout($param){
    return $param;
  }  
}
class Kind extends Eltern{
  private $args=["Hugo", "Berta", "Marion", "Marie"];
  
  /**
   * 
   * @return string Methode der Elternklasse
   */
  public function shout($param, $name=''){
    //return "Nein, darüber müssen wir diskutieren!";
    $inter = parent::shout($param);    
    return $inter." ".$param.": ".$name;
  }
  public function argsCheck(){
    var_dump(func_get_args());/*es erzeugt eine Funktion, welche die Argumente der Klasse übernimmt. 
    //Somit kann man die Anzahl der übergebenen Argumente offen lassen.*/
  }
  public function argsCount(){
    $argsLength= func_num_args();
    switch ($argsLength){
      case 4:
        var_dump($args);
        return args1(func_get_args());
        break;
      case 6:
        return args1(func_get_args());
        break;
      default:break;        
    }    
  }
  
  private function args1($args){
    
  }
  private function args2($args){
    
  }
}
$parent=new Eltern();
echo $parent->shout("Still jetzt!");

$kid=new Kind();
echo $kid->shout("Und ick sag Dir:", "Rolf"); 
$kid->argsCheck("a","b","c");
