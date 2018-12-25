<?php

require_once './MySqlConnection.php';
require_once './PgConnection.php';

$con = new PgConnection('postgres', 'Saborio17', 'postgres', 5432, 'localhost');
$con->connect();

/**$con->runStatement(
    'INSERT INTO lugares(nombre, altura, poblacion) VALUES ($1, $2, $3)',
    ['Zarcero', 2500, 20000]
);**/

$result = $con->runQuery('SELECT * FROM usuarios');

foreach ($result as $row) {
    echo $row['id'] . "\n";
    echo $row['nombre'] . "\n";
    echo $row['apellido'] . "\n";
}

$con->disconnect();
