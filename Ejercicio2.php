<?php
class Shape
{
    public $ancho;
    public $alto;

    public $area;

    function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
}

class Triangulo extends Shape
{
    function area()
    {
        $this->area = (($this->ancho * $this->alto) / 2);
        return $this->area;
    }
}

class Rectangulo extends Shape
{
    function area()
    {
        $this->area = ($this->alto * $this->ancho);
        return $this->area;
    }
}

$rectangulo = new Rectangulo(4, 4);
echo $rectangulo->area() . "\n";
echo "<br>";
$triangulo = new Triangulo(7, 4);
echo $triangulo->area() . "\n";
