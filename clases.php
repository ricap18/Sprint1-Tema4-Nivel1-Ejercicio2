

<?php

class Shape {              //  Clase Padre
    
   protected $width;
   protected $height;

   public function __construct ($width, $height){   // Metodo constructor
        $this-> width = $width;
        $this-> height = $height;
   }
}
class Triangle extends Shape {       // Clase hija
   public function area() {
      return ($this-> width * $this-> height)/2;
   }
}
class Rectangle extends Shape {      // Clase hija
   public function area() {
      return ($this-> width * $this-> height);
   }
}

?>

