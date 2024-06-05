function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre 
    };

    $.ajax({
        url :"26-ajax-pdo.php",
        type : "post",
        data: datos,
        success : function(result) {
            console.log(result);
            debugger;
            //console.ing(result);
            const pacientes = result;
            paciente.forEach(item => {
                agregarFilas("#tabla",item);
            });           
        }     
    })
    
    return; 
}

function agregarFilas(id) {
    const html =
    "<tr>"+
    "<td>"+Paciente.Nombres+"</td>"+
    "<td>"+Paciente.Edad+"</td>"+
    "<td>"+Paciente.Talla+"</td>"+
    "<td>"+Paciente.Peso+"</td>"+
    "<td>"+Paciente.Tos+"</td>"+
    "<td>"+Paciente.Fiebre+"</td>"+
    "<td>"+Paciente.Disnea+"</td>"+
    "<td><button type='button'>Editar</button></td>" +
    "</tr>";
    $(id + " tr:last").after(html);
}