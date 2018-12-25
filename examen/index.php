<?php



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

            <div class="form-wizard">
                <div class="wizard-icon"></div>
                <p> 2. Datos del Vehiculo</p>
            </div>

            <div class="form-wizard">
                <div class="wizard-icon"></div>
                <p> 3. Fotos</p>
            </div>
        </div>

        <!--1-->
         <fieldset>
                <div class="form-group">
                    <label>Cedula</label>
                    <input type="cedula" type="text" name="cedula" class="form-control" placeholder="Cedula"/>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre"/>
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos"/>
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Telefono"/>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Siguiente</button>
                </div>
        </fieldset>

        <!--2-->
        <fieldset class="form-group">
        
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea name="descripcion" class="form-control" placeholder="Notas"></textarea>
                </div>

                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Siguiente</button>
                </div>
        </fieldset>

        <!--3-->
        <fieldset class="form-group">
       
                <div class="form-group">
                    <div class="custom-file">
                    <input type="file" name="imagen">
                    </div>
                </div>

                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" id="jaja" class="btn btn-next">Siguiente</button>
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