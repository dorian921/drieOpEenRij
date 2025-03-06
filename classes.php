<?php



class Figure {
//eigenschappen
public string $color;

//methods

public function  __construct($color) {

  $this->color = $color;
  
}

public function getColor(){
  return $this->color;


}

public function draw(){
  echo '<svg width="100" height="100">   </svg>';


}
 
 




}


class Square extends Figure {

  public int $length;

  public function __construct($color , $length) {
    parent::__construct( $color);
    $this->length = $length;

    
  }

 

}

class Triangle extends Figure {

  public int $height;
  public int $width;

  public function __construct($color , $height, $width) {
    parent::__construct( $color);
    $this->width = $width;
    $this->height = $height;
  }
  public function draw() {
    $points = "0,{$this->height} {$this->width},{$this->height} " . ($this->width / 2) . ",0";
        
    
    echo  '<svg width="' . $this->width . '" height="' . $this->height . '"> <polygon points="' . $points . '" fill="' . $this->color . '" /> </svg>';
 }

}

class Rectangle extends Figure {

  public int $height;
  public int $width;

  public function __construct($color , $height, $width) {
    parent::__construct( $color);
    $this->width = $width;
    $this->height = $height;

    
  }

  public function draw() {
    echo  '<svg width="100" height="100"> <rect width="' . $this->width . '" height="' . $this->height . '" x="0" y="0" fill="' .$this->color . '" />  </svg>';
 }

}

class Circle extends Figure {

  public int $length;

  public function __construct($color , $length) {
    parent::__construct( $color);
    $this->length = $length;

    
  }

  public function draw() {
     echo  '<svg width="100" height="100"> <circle cx="' . $this->length . '" cy="' . $this->length . '" r="' .$this->length . '" fill="' .$this->color . '" />  </svg>';
  }

}






