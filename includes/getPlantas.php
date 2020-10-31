<?php 
    require('../conexion/conexion.php');

    $id_categoria= $_POST['id_categoria'];

    $queryPlantas = "SELECT id_planta, categoria, nombre_planta FROM tb_plantas WHERE categoria= '$id_categoria' ORDER BY nombre_planta ASC";
    $resultadoPlantas = $mysqli->query($queryPlantas);

    //$html= "<option value='0'>Seleccionar Categoria</option>";
    $html= "<option value='0'>Seleccionar Categoría</option>";

    WHILE($rowPlantas = $resultadoPlantas->fetch_assoc())
    {
        $html.= "<option value='".$rowPlantas['id_planta']."'>".$rowPlantas['nombre_planta']."</option>";
    }

    echo $html;
?>
