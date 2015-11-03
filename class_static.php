<?php

class Car {

  static $wheels = 4;
  var $hood = 1;

  function CallStatic() {
      print Car::$wheels;
  }

}

$bmw = new Car();
//stamp static valour
Car::CallStatic();



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
