

<?php

abstract class Shape {              //  Clase Padre
   protected $width;
   protected $height;
abstract public function area($width, $height);  

}
class Triangle extends Shape {       // Clase hija
   public function area($width, $height) {
      return ($width * $height)/2;
   }
}
class Rectangle extends Shape {      // Clase hija
   public function area($width, $height) {
      return ($width * $height);
   }
}

?>