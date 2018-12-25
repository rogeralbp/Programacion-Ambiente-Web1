<?php


require_once './DbConnection.php';
require_once './PgConnection.php';

$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$kilometraje = filter_input(INPUT_POST, 'kilometraje', FILTER_SANITIZE_STRING);
$descripcion     = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$con = new PgConnection('postgres', 'Saborio17', 'ordenes', 5432, 'localhost');
$con->connect();

$con->runStatement(
    'INSERT INTO vehiculos(placa, marca, modelo, kilometraje, descripcion) VALUES ($1, $2, $3, $4 ,$5)',
    [$placa,$marca,$modelo,$kilometraje,$descripcion]);
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
                <p> 2. Datos del Vehiculo</p>
            </div>

        </div>

        <!--2-->
        <fieldset class="form-group">
        

        <div class="form-group">
                    <label>Placa</label>
                    <input  type="text" name="placa" class="form-control" placeholder="Placa" required/>
                </div>
                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" name="marca" class="form-control" placeholder="Marca"  required/>
                </div>
                <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" name="modelo" class="form-control" placeholder="Modelo"  required/>
                </div>
                <div class="form-group">
                    <label>Kilometraje</label>
                    <input type="text" name="kilometraje" class="form-control" placeholder="kilometraje"  required/>
                </div>
               

                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control" placeholder="Notas"></textarea>
                </div>

                <div class="wizard-buttons">
                <a class="btn btn-next" href="./1.php">Anterior</a>
                <button type="submit"><a class="btn btn-next" href="./3.php">Siguiente</a></button>
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