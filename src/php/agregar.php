<html>

<head>
    <title>AGREGAR PIEZA</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
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

        include("conexion.php");
        $sql = "insert into zonas(pieza,colada,dueno,almas,moldeo,fusion,floggy,tratamientos,inspeccion,finishing,cmm)
    values( '" . $pieza . "', '" . $colada . "', '" . $dueno . "', '" . $almas . "', 
    '" . $moldeo . "', '" . $fusion . "', '" . $floggy . "', '" . $tratamientos . "', '" . $inspeccion . "', 
    '" . $finishing . "', '" . $cmm . "')";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {

            echo "<script language='JavaScript'>
        alert('Los datos fueron ingresados correctamente a la BD');
        location.assign('index.php');
        </script>
        ";
        } else {
            echo "<script language='JavaScript'>
        alert('ERROR: Los datos NO fueron ingresados 
        correctamente a la BD');
        location.assign('index.php');
        </script>";
        }
        mysqli_close($conexion);

    } else {
        ?>

        <h1>AGREGAR NUEVA PRUEBA </h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label> Pieza: </label>
            <input type="varchar(100)" name="pieza"><br>
            <label> colada: </label>
            <input type="int(5)" name="colada"><br>
            <label> dueno: </label>
            <input type="text" name="dueno"><br>
            <label> Almas: </label>
            <input type="varchar(100)" name="almas"><br>
            <label> Moldeo: </label>
            <input type="varchar(100)" name="moldeo"><br>
            <label> Fusion: </label>
            <input type="varchar(100)" name="fusion"><br>
            <label> Floggy: </label>
            <input type="varchar(100)" name="floggy"><br>
            <label> Tratamientos Termicos: </label>
            <input type="varchar(100)" name="tratamientos"><br>
            <label> Inspeccion: </label>
            <input type="varchar(100)" name="inspeccion"><br>
            <label> Finishing: </label>
            <input type="varchar(100)" name="finishing"><br>
            <label> CMM: </label>
            <input type="varchar(100)" name="cmm"><br>
            <input type="submit" name="enviar" value="AGREGAR">
            <a href="index.php"> REGRESAR</a>
        </form>
        <?php
    }
    ?>
</body>

</html>