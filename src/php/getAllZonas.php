<?php
 
    include("conexion.php");

    $sql = "SELECT * FROM `zonas`ORDER BY id DESC";

    $resultado = mysqli_query($conexion, $sql);

    while ($row = mysqli_fetch_array($resultado)) {
        $filas[] = ($row);
    }

    print_r(json_encode($filas));

    mysqli_close($conexion);
    
?>