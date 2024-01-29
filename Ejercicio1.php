<?php
class Employee
{
    public $nombre;
    public $sueldo;

    function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    function print()
    {
        if ($this->sueldo > 6000) {
            return $this->nombre . "." . " Debes pagar impuestos." . "\n";
        } else {
            echo $this->nombre . "."
                . " No pagas impuestos." . "\n";
        }
    }
}

$prueba1 = new Employee("José Alvarenga ", 6000);
echo $prueba1->print();
