<?php

function conectar(){

    $host = "localhost";
    $user = "root";
    $pass = "admin";
    $baseD = "personal";

    $con = mysqli_connect($host, $user, $pass);

    mysqli_select_db($con, $baseD);

    if($con){
        //echo "Connect succesfully";
    }

    return $con;

}

    


?>