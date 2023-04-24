<?php
    if (isset($_POST['enviar'])) {
        include("conexion.php");

        $pieza = $_POST['pieza'];
        $colada = $_POST['colada'];
        $dueno = $_POST['dueno'];
        $almas = $_POST['almas'];
        $moldeo = $_POST['moldeo'];
        $fusion = $_POST['fusion'];
        $floggy = $_POST['floggy'];
        $tratamientos = $_POST['tratamientos'];
        $inspeccion = $_POST['inspeccion'];
        $finishing = $_POST['finishing'];
        $cmm = $_POST['cmm'];

        $sql = "insert into zonas(pieza,colada,dueno,almas,moldeo,fusion,floggy,tratamientos,inspeccion,finishing,cmm)
            values( '" . $pieza . "', '" . $colada . "', '" . $dueno . "', '" . $almas . "', 
            '" . $moldeo . "', '" . $fusion . "', '" . $floggy . "', '" . $tratamientos . "', '" . $inspeccion . "', 
            '" . $finishing . "', '" . $cmm . "')";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {

            echo 
            "<script language='JavaScript'>
                alert('Los datos fueron ingresados correctamente a la BD');
                location.assign('../../index.html');
            </script>";

        } else {
            
            echo 
            "<script language='JavaScript'>
                alert('ERROR: Los datos NO fueron ingresados correctamente a la BD');
                location.assign('../../index.html');
            </script>";
        }

        mysqli_close($conexion);

    } 

?>
