<?php

interface DbInterface {
  public function insert($param);
  public function select();
  public function delete($param);
  public function update($param);
}

class DbClass implements DbInterface{
  function __construct() {
    
  }
  public function insert($param){
    echo "insert me";
  }
  public function select(){
    
  }
  public function delete($param){
    
  }
  public function update($param){
    
  }
}

class MyDb extends DbClass{
  
}
$db=new MyDb();
$db->insert(33);