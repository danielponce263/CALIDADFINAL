$(document).ready(function(){

    $("#usuario-form").bind("submit",function(){
            $.ajax({
                type:$(this).attr("method"),
                url:$(this).attr("action"),
                data: $(this).serialize(),
                success:function(){
                    $('#tabla').load('Administrador.php');
                    swal("Registrado", "...Registrado Exitosamente", "success");
                },
                error: function(){
                    alertify.error("Fallo el servidor :(");
                }
            });
            return false;   
    });

});