// Función para buscar pacientes en la base de datos
function buscarPacientes() {
    const $nombre = $("#nombre").val();
    let datos = {
        nombre: $nombre
    };

    // Realiza la petición AJAX para buscar pacientes
    $.ajax({
        url: "26-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(result) {
            console.log(result);
            const pacientes = $.parseJSON(result);
            // Limpia la tabla antes de agregar nuevas filas
            $("#tabla tbody").empty();
            if (pacientes.length > 0) {
                pacientes.forEach(item => {
                    agregarFilas("#tabla", item);
                });
            } else {
                alert("No se encontraron pacientes");
            }
        },
        error: function(err) {
            console.error("Error en la petición AJAX: ", err);
        }
    });

    return;
}

// Función para agregar filas a la tabla con los datos de los pacientes
function agregarFilas(id, paciente) {
    const html = `
    <tr>
        <td>${paciente.nombres}</td>
        <td>${paciente.edad}</td>
        <td>${paciente.talla_m}</td>
        <td>${paciente.peso_kg}</td>
        <td>${paciente.sintoma_tos}</td>
        <td>${paciente.sintoma_fiebre}</td>
        <td>${paciente.sintoma_disnea}</td>
        <td>
            <button type="button" class="btn btn-warning" onclick="editar('${paciente.nombres}', '${paciente.edad}');">Editar</button>
            <button type="button" class="btn btn-danger" onclick="eliminarPaciente('${paciente.id}');">Eliminar</button>
        </td>
    </tr>`;
    $(id + " tbody").append(html);
}


// Función para eliminar un paciente
function eliminarPaciente(id) {
    // Confirmar antes de eliminar
    if (confirm("¿Estás seguro de que deseas eliminar este paciente?")) {
        let datos = {
            id: id
        };

        // Realiza la petición AJAX para eliminar al paciente
        $.ajax({
            url: "24.1-eliminacion.ajax.php", // Reemplaza con la ruta correcta
            type: "post",
            data: datos,
            success: function(result) {
                alert("Paciente eliminado correctamente");
                buscarPacientes(); // Actualiza la lista de pacientes después de la eliminación
            },
            error: function(err) {
                console.error("Error en la petición AJAX para eliminar paciente: ", err);
            }
        });
    }
}




// Función para mostrar el modal de edición con los datos del paciente
function editar(nombres, edad) {
    $('#exampleModal').modal('show');
    $("#nombre2").val(nombres);
}

// Función para actualizar los datos del paciente
function actualizar() {
    const $nombre = $("#nombre2").val();

    let datos = {
        nombre: $nombre
    };

    // Realiza la petición AJAX para actualizar los datos del paciente
    $.ajax({
        url: "26.1-update-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(result) {
            alert("Se guardaron los datos correctamente de " + result);
            $('#exampleModal').modal('hide');
            buscarPacientes(); // Actualiza la lista de pacientes después de la edición
        },
        error: function(err) {
            console.error("Error en la petición AJAX: ", err);
        }
    });

    return;
}

// Función para ocultar el modal de edición
function cancelar() {
    $('#exampleModal').modal('hide');
}
