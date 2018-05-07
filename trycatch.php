<?php

function fx($x) {
 if ($x < 100) {
  throw new Exception('Fehler: zahl ist unter 100');
 }
}

try {
 fx(2);
 echo 'ok';
} catch (Exception $e) {
 echo '<pre>';
var_dump($e->getTrace());
 echo '</pre>';
}


