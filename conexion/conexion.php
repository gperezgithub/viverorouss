<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'bd_vivero';

    $mysqli = new mysqli($server,$username,$password,$database);

    //$conexion=mysqli_connect($server,$username,$password,$database) or die (mysqli_error());

    $conexion = new mysqli($server,$username,$password,$database);
    //$conexion2 = new mysqli_connect($server,$username,$password,$database);

    if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_error();
        exit();
    }

?>