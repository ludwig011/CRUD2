<?php
    if (isset($_POST['enviar'])) { 
        include('conexion.php');

        $id = $_REQUEST['id'];
        $pieza = $_REQUEST['pieza'];
        $colada = $_REQUEST['colada'];
        $dueno = $_REQUEST['dueno'];
        $almas = $_REQUEST['almas'];
        $moldeo = $_REQUEST['moldeo'];
        $fusion = $_REQUEST['fusion'];
        $floggy = $_REQUEST['floggy'];
        $tratamientos = $_REQUEST['tratamientos'];
        $inspeccion = $_REQUEST['inspeccion'];
        $finishing = $_REQUEST['finishing'];
        $cmm = $_REQUEST['cmm'];

        $update = "UPDATE zonas SET pieza='" . $pieza . "',colada='" . $colada . "',dueno='" . $dueno . "',almas='" . $almas . "',
            moldeo='" . $moldeo . "',fusion='" . $fusion . "',floggy='" . $floggy . "',tratamientos='" . $tratamientos . "',
            inspeccion='" . $inspeccion . "',finishing='" . $finishing . "',cmm='" . $cmm . "' WHERE id='" . $id . "'";

        $resultado = mysqli_query($conexion, $update);

        if ($resultado) {

            echo 
            "<script language='JavaScript'> 
                alert('los datos se actualizaron correctamente');
                location.assign('../../index.html');
            </script>";

        } else {
            
            echo 
            "<script language='JavaScript'> 
                alert('los datos NO se actualizaron');
            </script>";
        
        }

        mysqli_close($conexion);

    } 
?>