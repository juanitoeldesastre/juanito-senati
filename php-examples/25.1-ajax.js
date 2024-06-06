function buscarPacientes() {
    const nombre = $("#nombre").val();
    const datos = { nombre };

    $.ajax({
        url: "26-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(result) {
            console.log("Respuesta del servidor:", result);
            const pacientes = JSON.parse(result);
            console.log("Pacientes encontrados:", pacientes);

            $("#tabla tbody").empty();

            if (pacientes.length > 0) {
                pacientes.forEach(paciente => {
                    // Convertir valores de síntomas a texto según la base de datos
                    const tieneTos = paciente.sintoma_tos === '1' ? 'Sí' : 'No';
                    const tieneFiebre = paciente.sintoma_fiebre === '1' ? 'Sí' : 'No';
                    const tieneDisnea = paciente.sintoma_disnea === '1' ? 'Sí' : 'No';

                    const row = `<tr>
                        <td>${paciente.nombres}</td>
                        <td>${paciente.edad}</td>
                        <td>${paciente.talla_m}</td>
                        <td>${paciente.peso_kg}</td>
                        <td>${tieneTos}</td>
                        <td>${tieneFiebre}</td>
                        <td>${tieneDisnea}</td>
                        <td>Acciones</td>
                    </tr>`;
                    $("#tabla tbody").append(row);
                });
            } else {
                alert("No se encontraron pacientes con ese nombre.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Error en la solicitud AJAX:", error);
        }
    });
}




function guardarCambios() {
    const $nombre = $("#nombre2").val();
   
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26.1-update-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {              
            alert("Se guardo los datos correctamente de "+result);            
        }
    })
 
 
    return;
}
 
function cancelar() {
    $('#exampleModal').modal('hide');    
}