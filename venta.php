<!--CAMBIAR EL NOMBRE DE ESTE ARCHIVO A ->> venta.php, 
Aquí se encuentra el formulario que realiza la venta-->


<?php 

    //Se usa para llenar el combo box 2 -> Plantas
    require('conexion/conexion.php');

    $query = "SELECT id_categoria, nombre from tb_categoria";
    $resultado = $mysqli -> query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivero Rouss</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="diseñoVenta.css">
    <link rel="stylesheet" href="diseñoCabecera.css"> <!--comparte el mismo css para el encabezado, con index.php-->
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Font Awesome (iconos)-->
    <script src="https://kit.fontawesome.com/43a40e8643.js" crossorigin="anonymous"></script>
    <!--JQuery-->
    <script language="javascript" src="js/jquery-3.5.1.js"></script>

    <script languaje="javascript">
        $(document).ready(function(){
            $("#combo_categoria").change(function(){

           // $('#combo_categoria').find('option').remove().end().append(
           // '<option value "whatever"></option>').val('whatever');

            $("#combo_categoria option:selected").each(function(){            
                    id_categoria = $(this).val();
                    $.post("includes/getPlantas.php", { id_categoria: id_categoria
                    },function(data){
                        $("#combo_planta").html(data);
                    });
                });
            })
        });
    </script>    
   
</head>

<body>
<?php require 'header.php' ?>

    <div id=contenedorGeneral>
       <form id=venta name=venta action="venta.php" method="POST" class="form-register">

            <div>
                <h4>Selecciona Categoría:</h4>
                        
                <select class="controls" name="combo_categoria" id=combo_categoria>
                    <option value="0">Seleccionar Categoría</option>
                      
                    <?php WHILE($row = $resultado->fetch_assoc()){ ?>
                        <option value="<?php echo $row['id_categoria'];?>"><?php echo $row['nombre'];?></option> 
                        
                    <?php } ?>             
                
                </select>
                </div>
                
                
                <div>
                    <select class="controls" name="combo_planta" id=combo_planta>
                        <option value="0">Seleccionar Planta</option>
                    </select>
                </div>

                <div>
                    <label for="cantidad">Cantidad</label>
                    <input  class="controls" type=text name=cantidad id=cantidad placeholder="Ingresar cantidad">
                </div>

                <input class=button type="submit" name="guardar" value="Comprar">
                
            </div>
        </form>
     
        <?php 
            if(isset($_POST['guardar'])){
                include("conexion/conexion.php");
                
                    $queryPrecio ="SELECT precio FROM tb_plantas where id_planta = $_POST[combo_planta]";
                            
                    $resultado =  mysqli_query($conexion,$queryPrecio); 
                    $result = mysqli_fetch_assoc($resultado);
                    $cantidad = $_POST['cantidad'];
                    $total = $result['precio']*$cantidad;

                    //INSERTAR DATOS A LA BASE DE DATOS

                    $planta = $_POST['combo_planta'];

                    echo '<br>';
                    echo 'id de la planta '.$planta;
                    echo '<br>';
                    echo 'cantidad '.$cantidad;
                    echo '<br>';
                    echo 'total'.$total;

                    //CONSULTA
                    $insertar = "INSERT INTO tb_venta2 (planta, cantidad,total)
                    values('$planta','$cantidad','$total')";

                    //EJECUTAR CONSULTA

                    $resultado = mysqli_query($conexion, $insertar);

                    if(!$query){
                        echo "<br>ERROR";
                    }
                    else{
                        echo "<br>COMPRA REGISTRADA EXITOSAMENTE";
                    }


                     include("conexion/cerrarConexion.php");
            }
        ?>


        <?php

        ?>

    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
       // $('#combo_categoria').val(2);
        recargarLista();

        $('#combo_categoria').change(function(){
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista(){
        $.ajax({
            type:"POST",
            url:"consultas.php",
            data:"categoria =" + $('#combo_categoria').val(),
            succes:function(r){
                $('#select2lista').html(r);
            }
        });
    }
</script>