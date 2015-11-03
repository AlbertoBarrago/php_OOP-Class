<?php

class Atleta {
    var $nome = "nome";
    var $cognome = "cognome";
    var $eta = 18;
    var $sesso = "m";
    var $altezza = 1.70;


    function ChangeName($valour){
      $this->nome = $valour;
    }


}

class Pilota extends Atleta {


}


$alberto = new Atleta();
$silvia = new Atleta();


$alberto->ChangeName("Alberto");

echo $silvia->altezza;
echo '<br>';
echo $alberto->nome;


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>declare_class.php</title>
  </head>
  <body>

  </body>
</html>
