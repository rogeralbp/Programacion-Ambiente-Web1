<?php

function suma($value1,$value2)
{
    return  $value1 + $value2;
}

function multiplicacion($value1,$value2)
{
    return ($value1 * $value2);
}

function resta($value1,$value2)
{
    return  ($value1 - $value2);
}

function division($value1,$value2)
{
    if ($value1 ==0 || $value2 == 0) {
        return 0;
    }
    return  ($value1 / $value2) ;
}

function operacion($value1,$value2,$tipo){
	if($tipo=='Suma'){
		 return suma($value1,$value2);
	}

	if($tipo=='Resta'){
		 return resta($value1,$value2);	
	}

	if($tipo=='Division'){
		 return division($value1,$value2);
	}

	if($tipo=='Multiplicacion'){
		  return multiplicacion($value1,$value2);
	}
}


$value1    = filter_input(INPUT_GET, 'value1', FILTER_SANITIZE_STRING);
$value2    = filter_input(INPUT_GET, 'value2', FILTER_SANITIZE_STRING);
$tipo      = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_STRING);

