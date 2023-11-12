<?php
$nom = isset($_GET['nom']) ? $_GET['nom'] : ''; 
$valoracion = isset($_GET['valoracion']) ? $_GET['valoracion'] : ''; 
$vistas = isset($_GET['vistas']) ? $_GET['vistas'] : ''; 
$link = isset($_GET['link']) ? $_GET['link'] : ''; 
$id_cat = isset($_GET['id_cat']) ? $_GET['id_cat'] : ''; 
$id_don = isset($_GET['id_don']) ? $_GET['id_don'] : ''; 
?>
<div id="formularioDonador">
    <div class="form">
        <form action="sregistrar.php" method="post">
          <table>
            <tr>
                <td>Ingresar Datos:</td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nom" id=""></td>
            </tr>
            <tr>
                <td>Valoración:</td>
                <td><input type="number" name="valoracion" id=""></td>
            </tr>
            <tr>
                <td>Vistas:</td>
                <td><input type="number" name="vistas"  id=""></td>
            </tr>
            <tr>
                <td>Link:</td>
                <td><input type="text" name="link" id=""></td>
            </tr>
            <tr>
                <td>ID_Categoria:</td>
                <td><input type="number" name="id_cat" id=""></td>
            </tr>
            <tr>
                <td>ID_Donacion:</td>
                <td><input type="number" name="id_don"  id=""></td>
            </tr>
            
          </table>
        <input class="btn1" type="submit" value="Añadir">
        </form>
    </div>
</div>

