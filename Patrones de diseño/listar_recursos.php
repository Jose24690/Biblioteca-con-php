<?php
// Conexión a la base de datos (asegúrate de tener esta parte en tu archivo PHP)
include 'conectar.php';

// Realiza la consulta para obtener todos los registros de la tabla 'recurso'
$query = "SELECT * FROM recurso";
$resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Recurso</th><th>Nombre Recurso</th><th>Valoración</th><th>Vistas</th><th>Link</th><th>ID Categoría</th><th>ID Donación</th>";
    
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['ID_Recurso'] . "</td>";
            echo "<td>" . $fila['Nombre_Recurso'] . "</td>";
            echo "<td>" . $fila['Valoracion'] . "</td>";
            echo "<td>" . $fila['Vistas'] . "</td>";
            echo "<td>" . $fila['Link'] . "</td>";
            echo "<td>" . $fila['ID_Categoria'] . "</td>";
            echo "<td>" . $fila['ID_Donacion'] . "</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    } else {
        echo "No se encontraron registros en la tabla 'recurso'.";
    }
    
// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
