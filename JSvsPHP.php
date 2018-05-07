<?php
$a = 1;

define('DEFAULT_LANGUAGE', 'de');

function fx(float $price, string $currency = '€') {
 global $a;
 echo $a;
 echo DEFAULT_LANGUAGE;
//  echo $b; //undefined
}

fx(100);
fx(100, '$');
?>
<html>
 <head>
  <title>JS vs PHP</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>
  <script>
   
   (function () {

    var a = 1;//globale Variable
    var c = 11.1;//globale Variable
//    console.log(c);//11.1


    function fx() {
     var a = 'Omi';//lokale Variable (nur innerhalb der Function) 
     b = 100;//definition einer globalen Variable
     c = c * 1.19;
//     console.log(a);//Omi
    }
    fx();
//    console.log(b);//100
//    console.log(c);//13.209 

    //#####################################################

    var price = 100;

    function brutto(netto) {
     var result = netto * 1.19;
     return result;
    }

    var bruttoPrice = brutto(price);
    console.log(bruttoPrice);
   })();
  </script>

 </body>
</html>

