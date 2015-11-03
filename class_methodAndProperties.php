<?php

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 16;
  var $doors = 4;
  // method of class ~Car~
  function MoveWheels() {
      $this->wheels = 10;

  }

  //method for change engine
  function ChangeEngine() {
    $this->engine = 24;
  }

}

  //instance's class
  $twingo = new Car();
  $bmw = new Car();

  $twingo->wheels = 8;
  $twingo->hood = 5;
  $twingo->MoveWheels();

  $bmw->wheels = 10;
  $bmw->hood = 1;
  $bmw->ChangeEngine();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>declare_class.php</title>
  </head>
  <body>

    <h1 style="text-align:center;"><?php echo "The valour for <b>wheels</b> " . $twingo->wheels; ?></h1>
    <h1 style="text-align:center;"><?php echo $bmw->engine;  ?></h1>

  </body>
</html>
