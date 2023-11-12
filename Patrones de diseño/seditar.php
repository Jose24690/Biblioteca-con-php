<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$valoracion = $_POST['valoracion'];
$vistas = $_POST['vistas'];
$link = $_POST['link'];
$id_cat = $_POST['id_cat'];
$id_don = $_POST['id_don'];
include 'conectar.php';

$sql = "UPDATE recurso SET Nombre_Recurso='$nom', Valoracion='$valoracion', Vistas='$vistas', Link='$link', ID_Categoria='$id_cat', ID_Donacion='$id_don' WHERE ID_Recurso = '$id'";
$rta = mysqli_query($conexion, $sql);

echo "<script>";
if ($rta) {
    echo "alert('¡Actualización exitosa!');";
    echo "window.location = 'recursos.php';";
} else {
    echo "alert('Error al actualizar el recurso: " . mysqli_error($conexion) . "');";
    echo "window.history.back();";
}
echo "</script>";

?>
