<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include "conexion1.php";
        include "controlador.php";
        ?>
        <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    INGRSAR USUARIO:
                </div>
                <form class="p-4" method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Usuario: </label>
                        <input id="usuario" type="text" class="input" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" id="input" class="input" name="password">
                    </div>
            <div class="d-grid">
                        <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
            </div>
         </form>
</body>
</html>
