<!--CAMBIAR EL NOMBRE DE ESTE ARCHIVO A ->> Principal.php, 
aquí se va a mostrar los productos, sería la pagina principal del proyecto.
Index es la pagina de "inicio"-->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivero Rouss</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="diseñoInfo.css">
    <link rel="stylesheet" href="diseñoCabecera.css"> <!--comparte el mismo css para el encabezado, con index.php-->
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Font Awesome (iconos)-->
    <script src="https://kit.fontawesome.com/43a40e8643.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require 'header.php' ?>

    <div id=contenedorGeneral>
        

        <div id=titulo>
           <h4> MAS VENDIDAS </h4>
        </div>

        <div class=fila id=contenedor1>
            <div class=flotante >
                <img src="MasVendidas\bonsai.jpg" class=imagen id=img1>
               <span> BONSAI</span>
            </div>

            <div class=flotante >
                <img src="MasVendidas\camdorea.jpg" class=imagen id=img2>
                <span>CAMDOREA<span>
            </div>
                
            <div class=flotante >
                <img src="MasVendidas\limonero.jpg" class=imagen id=img3>
                <span>LIMONERO<span>
            </div>
        </div>

        <br><br>

        <div class=fila id=contenedor2>
            <div class=flotante >
                <img src="MasVendidas\naranjo.jpg" class=imagen  id=img4>
                <span>NARANJO<span>
            </div>

            <div class=flotante >
                <img src="MasVendidas\aloe vera.jpg" class=imagen id=img5>  
                <span>ALOE VERA<span>
            </div>

            <div class=flotante >
                <img src="MasVendidas\sansevieria.jpg" class=imagen id=img6>  
                <span>SANSEVIERIA<span>
            </div>
        </div>

        

    </div>


    <div id=contenedorGeneral2>
       
        <div id=titulo>
           <h4> CATEGORIAS</h4>
        </div>

        <div class=tarjetas>
            <div class=contenedor_tarjeta>
                <a href="categorias.php">
                    <figure>
                        <img src="flores\SUCULENTAS\AIZOÁCEAS02.jpg" class="frontal" alt="">
                        <figcaption class="trasera" id=suculentas>
                            
                            <h2 class=titulo>SUCULENTAS

                            </h2>
                            <hr>
                            <p>
                            Las plantas suculentas del latín suculentus, 'jugoso' o crasas
                             son aquellas en las que algún órgano está especializado
                              en el almacenamiento de agua en cantidades mayores que 
                              las plantas sin esta adaptación. 
                            </p>
                    </figure>
                </a>
            </div>

            <div class=contenedor_tarjeta>
                <a href="categorias.php">
                    <figure>
                        <img src="flores\PLANTAS DE SOL\GIRASOLES01.jpg" class="frontal" alt="">
                        <figcaption class="trasera" id=sol>
                            
                            <h2 class=titulo>PLANTAS DE SOL

                            </h2>
                            <hr>
                            <p>
                            Las plantas de sol son aquellas que requieren
                             mayor cantidad de luz solar para que realicen la
                              fotosíntesis de acuerdo a sus necesidades. Por lo
                               general las plantas resistentes al sol tienen las
                                hojas más pequeñas, no son tan brillantes como las 
                                de las plantas de sombra y sus flores son llamativas.
                            </p>
                    </figure>
                </a>
            </div>

            <div class=contenedor_tarjeta>
                <a href="categorias.php">
                    <figure>
                        <img src="flores\FLORES DE SOMBRA\HORTENSIA01.jpg" class="frontal" alt="">
                        <figcaption class="trasera" id=sombra>
                            
                            <h2 class=titulo>PLANTAS DE SOMBRA

                            </h2>
                            <hr>
                            <p>
                                Numerosas plantas son capaces de desarrollarse de forma
                                óptima bajo condiciones de poca o ninguna luz solar. A 
                                éstas se las conoce como plantas de sombra o plantas de
                                semisombra.
                                Se caracterizan por tener grandes hojas, encargadas de captar 
                                la mayor cantidad de luz posible. 

                            </p>
                    </figure>
                </a>
            </div>

            <div class=contenedor_tarjeta>
                <a href="categorias.php">
                    <figure>
                        <img src="flores\PLANTAS FRUTALES\NARANJA02.jpg" class="frontal" alt="">
                        <figcaption class="trasera" id=frutales>
                            
                            <h2 class=titulo>PLANTAS FRUTALES

                            </h2>
                            <hr>
                            <p>
                           
                              Un árbol frutal es cualquier árbol productor de frutas, cuyas estructuras formadas 
                            por el óvulo maduro de una flor, contiene una o más semillas. Sin embargo ya que 
                            para poder saberlo tienen que relacionarse en una gran cantidad ya que todas las 
                            plantas con flores producen frutos, el término usado en horticultura designa a los
                             árboles que proveen frutas como alimento del ser humano.

                            </p>
                    </figure>
                </a>
            </div>

            <div class=contenedor_tarjeta>
                <a href="categorias.php">
                    <figure>
                        <img src="flores\PLANTAS MEDICINALES\EUCALIPTO01.jpg" class="frontal" alt="">
                        <figcaption class="trasera" id=medicinales>
                            
                            <h2 class=titulo>PLANTAS MEDICINALES

                            </h2>
                            <hr>
                            <p>
                            Se denomina plantas medicinales a aquellas plantas que pueden 
                            utilizarse enteras o por partes específicas (hojas, 
                            flores, frutos, cortezas, tallos o raíces), para tratar
                             enfermedades de personas o animales. La acción 
                             terapéutica (alivio o mejora), se debe a sustancias
                              químicas llamadas principios activos1 que son 
                              considerados sustancias que ejercen sobre el organismo 
                              vivo, una acción farmacológica, beneficiosa o 
                              perjudicial. 

                            </p>
                    </figure>
                </a>
            </div>
        </div>




    </div>
</body>
</html>