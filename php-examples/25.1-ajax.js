function buscarPacientes() {
    const nombre = $("#nombre").val();
    const datos = { nombre };
    
    $.ajax({
        url: "26-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(result) {
            console.log("Respuesta del servidor:", result); // Verificar la respuesta del servidor
            const pacientes = JSON.parse(result);
            console.log("Pacientes encontrados:", pacientes); // Verificar los pacientes encontrados

            if (pacientes.length > 0) {
                const paciente = pacientes[0];
                console.log("Paciente seleccionado:", paciente); // Verificar el paciente seleccionado

                // Llenar los campos en tu tabla o formulario con los datos del paciente
                $("#nombrePaciente").val(paciente.nombres);
                $("#edadPaciente").val(paciente.edad);
                $("#tallaPaciente").val(paciente.talla_m);
                $("#pesoPaciente").val(paciente.peso_kg);
                // Otros campos del paciente según tus necesidades
            } else {
                alert("No se encontraron pacientes con ese nombre.");
            }
        },
        error: function(xhr, status, error) {
            console.error("Error en la solicitud AJAX:", error); // Verificar errores en la solicitud AJAX
        }
    });
}

function actualizar() {
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