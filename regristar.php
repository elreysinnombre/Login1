<?php
    if(empty($_POST["dato"]) || empty($_POST["informar"]) || empty($_POST["registro"]) || empty($_POST["tabla"]) || empty($_POST["relacion"]) || empty($_POST["SQL"]) || empty($_POST["DDL"]) || empty($_POST["DML"]) || empty($_POST["SGBD"]) || empty($_POST["basededatos"])){
        header('Location: index1.php?mensaje=falta');
        exit();
    }

    include_once 'conexion.php';
    $dato=$_POST["dato"];
    $informe = $_POST["informar"];
    $regristo=$_POST["registro"];
    $relacion = $_POST["relacion"];
    $tabla = $_POST["tabla"];
    $sql=$_POST["SQL"];
    $ddl = $_POST["DDL"];
    $dml=$_POST["DML"];
    $sgbd = $_POST["SGBD"];
    $basededatos=$_POST["basededatos"];
    $sentencia = $bd->prepare("INSERT INTO tablas(Dato,informacion,registro,tabla,relacion,definicionsql,DDL,DML,SGBD,basededatos) VALUES (?,?,?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$dato,$informe,$regristo,$tabla,$relacion,$sql,$ddl,$dml,$sgbd,$basededatos]);
  if ($resultado === TRUE) {
        header('Location: index1.php?mensaje=registrado');
    } else {
        header('Location: index1.php?mensaje=error');
    exit();    }
    
?>