
<!--ESTE DEBE SER EL INDEX DEL PROYECTO-->

<?php 
    
    session_start();


    if(isset($_SESSION['user_id'])){
        header('location: /Vivero');
    }
    
    require 'conexion/database.php';



    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $records = $conn->prepare('SELECT id_usuario, correo, contraseña FROM usuarios WHERE correo=:correoInfo');
        $records->bindParam(':correoInfo', $_POST['email']);
        
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC); //Esto no devuelve ningún número, sino 0        
        $message = '';
        //Error aquí, count>0, no funciona si el correo no existe en la bd

        if(count($results) >0 && password_verify($_POST['password'], $results['contraseña'])){
            $_SESSION['user_id'] = $results['id_usuario'];
            header('Location: portada.php');
        } else{
            $message = 'LO SIENTO ESTAS CREDENCIALES NO COINCIDEN';
        }
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href= "diseñoLogin.css">
    <link rel="stylesheet" href= "diseñoCabecera.css">
</head>
<body>

    <?php require 'header.php' ?>

    

        <h1>LOGIN </h1>
        <span> o <a href="registro.php">Registrarse </a></span>

        <?php if (!empty($message)) : ?>
            <p> <?= $message?> </p>
        <?php endif;?>

    <form action="index.php" method="post">
        <input type="text" name="email" placeholder="Agrega tu direccion de correo">
        <input  type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="send">
    </form>

      
</body>
</html>