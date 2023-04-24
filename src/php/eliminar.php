<?php
    include("conexion.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM zonas WHERE id='" . $id . "'";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
    
        echo 
        "<script languaje='JavaScript'> 
            alert('los datos se eliminaron correctamente de la BD');
            location.assign('../../index.html');
        </script>";

    } else {
    
        echo 
        "<script languaje='JavaScript'> 
            alert('los datos NO se eliminaron correctamente de la BD');
            location.assign('../../index.html');
        </script>";

    }
?>