<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'bd_vivero';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username,$password);
    } catch(PDOException $e){
        die('Connected failed: '.$e->getMessage());

    }

    $conexion=mysqli_connect($server,$username,$password,$database) or die (mysqli_error());
?>