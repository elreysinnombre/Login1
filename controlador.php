<?php
if(
    !empty($_POST["btningresar"])
){
    if(!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion1->query("select * from usuarios where usuario='$usuario' and password='$password'");
        if($dato=$sql->fetch_object()){
        header("location:../practicas/index1.php");
        }else{
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    }else{
        echo "campos vacios";
        }
}
?>