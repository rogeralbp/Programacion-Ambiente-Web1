<?php

require_once __DIR__ . '/../Db/PgConnection.php';
require_once __DIR__ . '/../Models/Usuario.php';
require_once __DIR__ . '/../Models/Vehiculo.php';
require_once __DIR__ . '/../Models/Venta.php';

use Db\PgConnection;
$con = new PgConnection('postgres', 'Saborio17', 'postgres', 5432, 'localhost');
$con->connect();

$usuario_model = new Models\Usuario($con);
$vehiculo_model = new Models\Vehiculo($con);
$venta_model = new Models\Venta($con);
