<?php 
    require 'conexion/database.php';

    $message = '';

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "INSERT INTO Usuarios (Correo,Contraseña) VALUES (:correoInfo, :contraInfo)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':correoInfo',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':contraInfo',$password);
    

        if($stmt->execute()){
            $message = 'USUARIO CREADO EXITOSAMENTE';
        } else{
            $message = 'LO SENTIMOS, HUBO UN PROBLEMA CON LA CREACIÓN DE LA CUENTA';
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="diseñoLogin.css">
    <link rel="stylesheet" href="diseñoCabecera.css">
</head>
<body>

    <?php require 'header.php' ?>


    <?php if(!empty($message)):  ?>
        <p> <?= $message ?> </p>   
    <?php endif; ?>

    <h1> REGISTRO </h1>

    <span> o <a href="index.php"> Login </a></span>

    <form action="registro.php" method="post">

        <input type="text" name="email" placeholder="Agrega tu direccion de correo">
        <input  type="password" name="password" placeholder="Ingresa tu contraseña">
        <input  type="password" name="confirm_password" placeholder="Confirma tu contraseña">
        <input type="submit" value="send">
    </form>

</body>
</html>