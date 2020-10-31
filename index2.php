<?php
    session_start();

    require 'database.php';

    if(isset($_SESSION['user_id'])){
        $records = $conn->prepare('SELECT Id_Usuario, Correo, Contraseña FROM Usuarios WHERE Id_Usuario=:id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;
        
        if(count($results)>0){
            $user = $results;
        }
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivero</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="diseño.css">
</head>
<body>


<?php require 'header.php' ?>



<?php if(!empty($user)): ?>
    

    <br> Welcome. <?= $user['Correo'] ?>
    <br> You are successfully Logged in
    <a href= "logout.php"> Cerrar Sesion </a>
<?php else: ?> 

<!--solo sale si no hay sesión iniciada-->

  <div id=caja1> 

    <h1>Registrarse o Iniciar Sesión</h1>
    <a href="login.php"> Login </a> or
    <a href="registro.php"> Registrarse </a>

    </div>

<?php endif;?>



    
</body>
</html>