<?php

require_once './DbConnection.php';
require_once './PgConnection.php';

$cedula = filter_input(INPUT_POST, 'cedula', FILTER_SANITIZE_STRING);
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$apellido = filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_STRING);
$telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$con = new PgConnection('postgres', 'Saborio17', 'ordenes', 5432, 'localhost');
$con->connect();

$con->runStatement(
    'INSERT INTO clientes(cedula, nombre, apellidos, telefono) VALUES ($1, $2, $3, $4)',
    [$cedula,$nombre,$apellido,$telefono]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>

<div class="container">

    <form action="" method="post">

        <div class="wizards">

            <div class="form-wizard active">
                <div class="wizard-icon"></div>
                <p> 1. Datos Personales</p>
            </div>
        </div>

        <!--1-->
         <fieldset>
                <div class="form-group">
                    <label>Cedula</label>
                    <input type="cedula" type="text" name="cedula" class="form-control" placeholder="Cedula" value="<?=$cedula?>" required/>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre"  value="<?=$nombre?>"/>
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos"  value="<?=$apellido?>" required/>
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono"  value="<?=$telefono?>" required/>
                </div>
                <div class="wizard-buttons">
                <button type="submit"><a class="btn btn-next" href="./2.php">Siguiente</a></button>
                </div>
        </fieldset>

    </form>

</div>
<script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>