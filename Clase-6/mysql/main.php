<?php
require_once './MySqlConnection.php';

$con = new MySqlConnection('root', '', 'prueba_consola', 3306, '127.0.0.1');
$con->connect();

$con->runStatement(
    'INSERT INTO usuarios(id,nombre) VALUES (?, ?)',
    [1234,'Juan antonio']
);

$result = $con->runQuery('SELECT * FROM usuarios');

foreach ($result as $row) {
    echo $row['id'] . "\n";
    echo $row['nombre'] . "---\n";
}

$con->disconnect();
