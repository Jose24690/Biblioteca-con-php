// JavaScript
function mostrarMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "none") {
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}

function eliminarRecurso() {
    var idRecurso = document.getElementById("idRecurso").value;

    if (idRecurso) {
        fetch(`eliminar_recurso.php?id=${idRecurso}`, { method: 'DELETE' })
            .then(response => {
                if (response.ok) {
                    console.log("Recurso eliminado con éxito");
                    cargarRecursos(); // Actualizar la lista después de la eliminación
                } else {
                    throw new Error('Error al eliminar el recurso');
                }
            })
            .catch(error => console.error(error));
    }
}
