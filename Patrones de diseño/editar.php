<?php
$id = isset($_GET['id']) ? $_GET['id'] : ''; // Verificar si 'id' está definido
$nom = isset($_GET['nom']) ? $_GET['nom'] : ''; // Verificar si 'nom' está definido
$valoracion = isset($_GET['valoracion']) ? $_GET['valoracion'] : ''; // Verificar si 'ape' está definido
$vistas = isset($_GET['vistas']) ? $_GET['vistas'] : ''; // Verificar si 'n1' está definido
$link = isset($_GET['link']) ? $_GET['link'] : ''; // Verificar si 'n2' está definido
$id_cat = isset($_GET['id_cat']) ? $_GET['id_cat'] : ''; // Verificar si 'n3' está definido
$id_don = isset($_GET['id_don']) ? $_GET['id_don'] : ''; // Verificar si 'n3' está definido
?>
<div id="formularioDonador">
    <div class="form">
        <form action="seditar.php" method="post">
            <table>
                <tr>
                    <td>Ingresar Datos:</td>
                </tr>
                <tr>
                    <td>ID del recurso:</td>
                    <td><input type="number" name="id" value="<?= $id ?>" id=""></td>
                </tr>
                <tr>
                    <td>NOMBRES:</td>
                    <td><input type="text" name="nom" value="<?= $nom ?>" id=""></td>
                </tr>
                <tr>
                    <td>Valoración:</td>
                    <td><input type="number" name="valoracion" value="<?= $valoracion ?>" id=""></td>
                </tr>
                <tr>
                    <td>Vistas:</td>
                    <td><input type="number" name="vistas" value="<?= $vistas ?>" id=""></td>
                </tr>
                <tr>
                    <td>Link:</td>
                    <td><input type="text" name="link" value="<?= $link ?>" id=""></td>
                </tr>
                <tr>
                    <td>ID_Categoria:</td>
                    <td><input type="number" name="id_cat" value="<?= $id_cat ?>" id=""></td>
                </tr>
                <tr>
                    <td>ID_Donacion:</td>
                    <td><input type="number" name="id_don" value="<?= $id_cat ?>" id=""></td>
                </tr>
            </table>
            <td><input class="btn2" type="submit" value="Actualizar"></td>

        </form>
    </div>
</div>
</body>
</html>
