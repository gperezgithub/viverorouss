<?php
    $conexion=mysqli_connect('localhost','root','','bd_vivero');
    $categoria= $_POST['categoria'];

    $sql="SELECT nombre_planta 
    from tb_plantas
    where categoria = '$categoria'";

    $result=mysqli_query($conexion,$sql);

    $cadena="<label>SELECT 2 (Plantas)</label>
        <select id=lista2 name=lista2>";

    while($ver=mysqli_fetch_row($result)){
        $cadena=$cadena+'<option value='+$ver[0]+'>'+utf8_encode($ver[2])+'</option>';

    }

    echo $cadena."</select>";
?>