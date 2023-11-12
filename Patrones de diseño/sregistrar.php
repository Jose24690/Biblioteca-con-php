<?php
$nom = $_POST['nom'];
$valoracion = $_POST['valoracion'];
$vistas = $_POST['vistas'];
$link = $_POST['link'];
$id_cat = $_POST['id_cat'];
$id_don = $_POST['id_don'];
include 'conectar.php';

$sql = "INSERT INTO recurso (Nombre_Recurso, Valoracion, Vistas, Link, ID_Categoria, ID_Donacion) VALUES ('$nom', '$valoracion', '$vistas', '$link', '$id_cat', '$id_don')";

$rta = mysqli_query($conexion, $sql);

echo "<script>";
if ($rta) {
    echo "alert('Registro exitoso!');";
    echo "window.location = 'recursos.php';";
} else {
    echo "alert('Error al registrar el recurso: " . mysqli_error($conexion) . "');";
    echo "window.history.back();";
}
echo "</script>";

?>
