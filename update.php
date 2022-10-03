<?php

include "conexion.php";

$con = conectar();

$id = $_POST['id'];
$nom = $_POST['nombre'];
$apel = $_POST['apellido'];
$tel = $_POST['telefono'];

$sql = "UPDATE persona set nombre = '$nom', apellido = '$apel', telefono = '$tel' 
        WHERE id = '$id'";

$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
}

?>