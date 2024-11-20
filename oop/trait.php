<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! <br>";
  }
}

trait message2 {
    public $food="Birani <br>";
  public function msg2() {
    echo "OOP reduces code duplication! <br>";
  }
}


class Display {
  use message1, message2;
}

// $obj = new Welcome();
// $obj->msg1();
// echo "<br>";

$obj2 = new Display();
$obj2->msg1();
$obj2->msg2();
echo $obj2->food;
?>