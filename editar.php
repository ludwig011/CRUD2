<?php
include("conexion.php");
?>
<html>

<head>
    <title> EDITAR </title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {

        $id = $_POST['id'];
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

        $sql = "UPDATE zonas SET pieza='" . $pieza . "',colada='" . $colada . "',dueno='" . $dueno . "',almas='" . $almas . "',
        moldeo='" . $moldeo . "',fusion='" . $fusion . "',floggy='" . $floggy . "',tratamientos='" . $tratamientos . "',
        inspeccion='" . $inspeccion . "',finishing='" . $finishing . "',cmm='" . $cmm . "' WHERE id='" . $id . "'";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language='JavaScript'> alert('los datos se actualizaron correctamente');
    location.assign('index.php');</script>";
        } else {
            echo "<script language='JavaScript'> alert('los datos NO se actualizaron');
    location.assign('index.php');</script>";
        }
        mysqli_close($conexion);

    } else {

        $id = $_GET['id'];
        $sql = "SELECT * FROM zonas WHERE id='" . $id . "'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_assoc($resultado);
        $pieza = $fila["pieza"];
        $colada = $fila["colada"];
        $dueno = $fila["dueno"];
        $almas = $fila["almas"];
        $moldeo = $fila["moldeo"];
        $fusion = $fila["fusion"];
        $floggy = $fila["floggy"];
        $tratamientos = $fila["tratamientos"];
        $inspeccion = $fila["inspeccion"];
        $finishing = $fila["finishing"];
        $cmm = $fila["cmm"];

        mysqli_close($conexion);


        ?>
        <h1>ingrese datos</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label> Pieza: </label>
            <input type="varchar(100)" name="pieza" value="<?php echo $pieza; ?>"><br>
            <label> colada: </label>
            <input type="int(5)" name="colada" value="<?php echo $colada; ?>"><br>
            <label> dueno: </label>
            <input type="text" name="dueno" value="<?php echo $dueno; ?>"><br>
            <label> Almas: </label>
            <input type="varchar(100)" name="almas" value="<?php echo $almas; ?>"><br>
            <label> Moldeo: </label>
            <input type="varchar(100)" name="moldeo" value="<?php echo $moldeo; ?>"><br>
            <label> Fusion: </label>
            <input type="varchar(100)" name="fusion" value="<?php echo $fusion; ?>"><br>
            <label> Floggy: </label>
            <input type="varchar(100)" name="floggy" value="<?php echo $floggy; ?>"><br>
            <label> Tratamientos Termicos: </label>
            <input type="varchar(100)" name="tratamientos" value="<?php echo $tratamientos; ?>"><br>
            <label> Inspeccion: </label>
            <input type="varchar(100)" name="inspeccion" value="<?php echo $inspeccion; ?>"><br>
            <label> Finishing: </label>
            <input type="varchar(100)" name="finishing" value="<?php echo $finishing; ?>"><br>
            <label> CMM: </label>
            <input type="varchar(100)" name="cmm" value="<?php echo $cmm; ?>"><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="enviar" value="Actualizar">
            <a href="index.php"> REGRESAR</a>
        </form>
        <?php
    }
    ?>
</body>

</html>