<?php

/*
require_once './MySqlConnection.php';
require_once './PgConnection.php';


$con = new PgConnection('postgres', 'Saborio17', 'postgres', 5432, 'localhost');
$con->connect();

//$result = $con->runQuery('SELECT * FROM usuarios_login');
//$correo = $con->runQuery('SELECT correo FROM usuarios_login');
$result = $con->runQuery('SELECT nombre FROM usuarios_login WHERE correo = (?)',["roportaperez@gmailcom"]);

$correo='';
$contraseña='';
foreach ($result as $row) {
    
    echo $row['contraseña'] . "\n";
}


/*
$nombre=$con->runQuery('SELECT * FROM usuarios WHERE id = 207930957');
var_dump($nombre);
*/
//$con->disconnect();
