<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/PrimeraPagina.css" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="nav">
        <ul>
            <li class="inicio"><a href="PrimeraPagina.html">Inicio.</a></li>
            <li class="active"><a href="Recursos.html">Recursos.</a></li>
        </ul>
    </div>
    <main class="cont1 sombra">
        <div id="recursosTable"></div>

        <script>
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("recursosTable").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "listar_recursos.php", true);
            xhr.send();
        </script>
        </main>
        <div class="botones">
        <button class="btn1" id="mostrarFormulario">Añadir</button>
            <div id="formularioDonador"></div>
            <button class="btn2" id="cargarContenido">Editar</button>
            <div id="contenidoCargado"></div>
            <button class="btn3" id="mostrarEliminar">Eliminar</button>
            <div id="formularioEliminar"></div>
        </div>


    <script>
        var contenidoCargado = document.getElementById("contenidoCargado");
        var formularioDonador = document.getElementById("formularioDonador");
        var formularioEliminar = document.getElementById("formularioEliminar");

        function toggleContenido() {
            if (contenidoCargado.innerHTML === '') {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        contenidoCargado.innerHTML = xhr.responseText;
                    }
                };
                xhr.open("GET", "editar.php", true);
                xhr.send();
            } else {
                contenidoCargado.innerHTML = '';
            }
        }

        function toggleFormulario() {
            if (formularioDonador.innerHTML === '') {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        formularioDonador.innerHTML = xhr.responseText;
                    }
                };
                xhr.open("GET", "registrar.php", true);
                xhr.send();
            } else {
                formularioDonador.innerHTML = '';
            }
        }
        function toggleFormularioEliminar() {
            if (formularioEliminar.innerHTML === '') {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        formularioEliminar.innerHTML = xhr.responseText;
                    }
                };
                xhr.open("GET", "eliminar.php", true);
                xhr.send();
            } else {
                formularioEliminar.innerHTML = '';
            }
        }
        document.getElementById('cargarContenido').addEventListener('click', toggleContenido);
        document.getElementById('mostrarFormulario').addEventListener('click', toggleFormulario);
        document.getElementById('mostrarEliminar').addEventListener('click', toggleFormularioEliminar);
    </script>
</html>
</body>

