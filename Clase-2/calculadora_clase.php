<?php

class Calculator
{
    public function __construct()
    {
        $this->resultado = 0;
    }

    public function suma($value)
    {
        return $this->resultado += $value;
    }

    public function resta($value)
    {
        return $this->resultado -= $value;
    }

    public function multiplicacion($value)
    {
        return $this->resultado *= $value;
    }

    public function division($value)
    {
        if ($value == 0) {
            return $this->resultado;
        }
        return $this->resultado /= $value;
    }
}
/*
$calc = new Calculator();

$calc->suma(9);
$calc->resta(2);
$calc->multiplicacion(5);
echo $calc->division(2);

$calc2 = new Calculator();

$calc2->suma(9);
$calc2->resta(2);
$calc2->multiplicacion(5);
echo $calc2->division(2);

echo $calc2->resultado;*/