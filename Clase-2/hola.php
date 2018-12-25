<?php

//$nombre = "ROGER";
//echo "Hola Mundo " . $nombre; 

function sayHello($nombre) {

	return strtoupper("Hello There $nombre");
}

echo sayHello("roger");
