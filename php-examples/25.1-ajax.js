function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre 
    };

    $.ajax({
        url :"25-ajax-pdo.php",
        type : "post",
        data: datos,
        success : function(result) {
            console.log(result);

        }     
    })
    
    
    return;
}