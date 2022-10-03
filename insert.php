<?php

include "conexion.php";

$con = conectar();

$nom = $_POST['nombre'];
$apel = $_POST['apellido'];
$tel = $_POST['telefono'];


$sql = "INSERT INTO persona (nombre, apellido, telefono)VALUES 
        ('$nom', '$apel', '$tel')";


$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
}


?>