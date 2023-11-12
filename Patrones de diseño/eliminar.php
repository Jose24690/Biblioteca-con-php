<?php
$id = isset($_GET['id']) ? $_GET['id'] : ''; // Verificar si 'id' está definido
?>
<div id="formularioEliminar">
    <div class="form">
        <form action="seliminar.php" method="post">
            <table>
                <tr>
                    <td>Ingresar Datos:</td>
                </tr>
                <tr>
                    <td>ID del recurso:</td>
                    <td><input type="number" name="id" value="<?= $id ?>" id=""></td>
                </tr>
            </table>
            <td><input class="btn3" type="submit" value="Eliminar"></td>

        </form>
    </div>
</div>
</body>
</html>
