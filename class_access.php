<?php

class Car {
  public $model = 19;
  protected $hood = 1;
  // Use only inside a specific class
  private $engine = 3;
  var $doors = 4;

  function ShowPrivate() {
    echo $this->engine;
  }

}

class Semi extends Car {

  // true for procected but not for private
  function ShowProperty() {
    echo $this->hood;
  }

}

$bmw = new Car();
$golf = new Semi();

$bmw->ShowPrivate();
echo "<br>";
$golf->ShowProperty();

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
