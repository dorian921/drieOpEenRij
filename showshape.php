<?php
include "classes.php";




$circle = new Circle("yellow", 25);
echo $circle-> draw();

echo "<br>";

$rect = new Rectangle("blue", 100 , 50 );
echo $rect-> draw();

echo "<br>";
echo "<br>";
echo "<br>";

$square = new Rectangle("orange", 50 , 50 );
echo $square-> draw();

echo "<br>";

$triangle = new Triangle("pink", 100, 80);
echo $triangle-> draw();


