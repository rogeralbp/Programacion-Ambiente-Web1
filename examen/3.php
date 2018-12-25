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
                <p> 3. Fotos</p>
            </div>
        </div>


        <!--3-->
        <fieldset class="form-group">
       
                <div class="form-group">
                    <div class="custom-file">
                    <input type="file" name="imagen">
                    </div>
                </div>

                <div class="wizard-buttons">
                <a class="btn btn-next" href="./2.php">Anterior</a>
                    <button type="submit">Guardar</button>
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