<?php
$id = $_GET['id'];
include("conexion.php");

$sql = "DELETE FROM zonas WHERE id='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo "<script languaje='JavaScript'> 
    alert('los datos se eliminaron correctamente de la BD');
location.assign('index.php');
</script>";

} else {
    echo "<script languaje='JavaScript'> 
    alert('los datos NO se eliminaron correctamente de la BD');
location.assign('index.php');
</script>";

}
?>