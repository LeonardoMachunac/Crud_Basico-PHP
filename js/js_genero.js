$(document).on("click",".new_gen",function(){
    var id=$(this).data('id');
    var url='controller_func/genero/create.php?id='+id;
    $.get(url,function(data){
        $('#form_genero').empty();
        $('#form_genero').append(data);
    });
    $('#modal-form-gen').modal('show');
});

function list_generos(){
    $.ajax({
        url: 'controller_func/genero/list.php',
    }).done(function(data){
        $('.table_gen').html(data);
    });
}



$(document).on("click","#btn_save_gen",function(){
    var data=$('#form_genero').serialize();
    $.ajax({
        url: 'controller_func/genero/accion.php',
        type : 'POST',
        data: data,
        success: function(data){
            if(data.trim()=='true'){
                list_generos();
                $('#modal-form-gen').modal('hide');
            }else{
                alert('Error al guardar');
            }
        }
    });
});



$(document).on("click",".desactivar_gen",function(){
    var id=$(this).data('id');
    var opcion_estado="desactivar";
    var url='controller_func/genero/accion.php?id='+id+'&opcion_estado='+opcion_estado;
    $.get(url,function(data){
        if(data.trim()=="true"){
            alert('Genero desactivado');
            list_generos();
        }else{
            alert('Error al desactivar');
        }
    });
});



$(document).on("click",".activar_gen",function(){
    var id=$(this).data('id');
    var opcion_estado="activar";
    var url='controller_func/genero/accion.php?id='+id+'&opcion_estado='+opcion_estado;
    $.get(url,function(data){
        if(data.trim()=="true"){
            alert('Genero desactivado');
            list_generos();
        }else{
            alert('Error al desactivar');
        }
    });
});