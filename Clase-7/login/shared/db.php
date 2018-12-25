<?php

require_once __DIR__ . '/../Db/PgConnection.php';
require_once __DIR__ . '/../Models/Usuario.php';

use Db\PgConnection;
$con = new PgConnection('postgres', 'Saborio17', 'postgres', 5432, 'localhost');
$con->connect();

$usuario_model = new Models\Usuario($con);
