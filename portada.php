

<!--PORTADA DEL PROYECTO-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivero Rouss</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="diseñoCabecera.css">
    <link rel="stylesheet" href="diseñoPortada.css">
 

    
    
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!--Font Awesome (iconos)-->
    <script src="https://kit.fontawesome.com/43a40e8643.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id=contenedorGeneral>
      
    <?php require 'header.php'?>

    <div class="container">
            <nav class= "navbar navbar-expand-lg navbar-dark bg-dark" >
                <a class ="navbar-brand text-white">
                    <img src="logo.jpg" id=logo>    
                </a>
            
            <button class ="navbar-toggler" data-target= "#menu" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"> </span>
                </button>
        
            <div class ="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                    <li class="navbar-item active">
                        <a href="info.php" class="nav-link">CATEGORIAS</a>
                    </li>
                    <li class="navbar-item active">
                        <a href="venta.php" class="nav-link">COMPRAS</a>
                    </li>
                </ul> 
            </div>
        </div>
        
        <div id=letras>
            VIVERO ROUSS
        </div>


    </div>
</body>
</html>