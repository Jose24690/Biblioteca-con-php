<?php
$id = $_POST['id'];
include 'conectar.php';
$sql = "DELETE FROM recurso WHERE ID_Recurso = '$id'";
$rta = mysqli_query($conexion, $sql);

echo "<script>";
if ($rta) {
    echo "alert('Eliminacion exitosa!');";
    echo "window.location = 'recursos.php';";
} else {
    echo "alert('Error al eliminar el recurso: " . mysqli_error($conexion) . "');";
    echo "window.history.back();";
}
echo "</script>";