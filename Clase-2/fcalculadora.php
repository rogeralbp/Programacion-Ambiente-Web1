<?php

require_once 'calculadora_clase.php';
$resultado = 0;

function suma($value)
{
    return $GLOBALS['resultado'] += $value;
}

function resta($value)
{
    return $GLOBALS['resultado'] -= $value;
}

function multiplicacion($value)
{
    return $GLOBALS['resultado'] *= $value;
}

function division($value)
{
    if ($value == 0) {
        return $GLOBALS['resultado'];
    }
    return $GLOBALS['resultado'] /= $value;
}

$calc = new Calculator();
$calc->suma(9);
$calc->resta(2);
$calc->multiplicacion(5);
echo $calc->division(2);