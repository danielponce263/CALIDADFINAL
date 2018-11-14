
function preguntarSiNo(id_usuario){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarUsuario(id_usuario) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarUsuario(id_usuario){

	cadena="id_usuario=" + id_usuario;

		$.ajax({
			type:"POST",
			url:"php/eliminarUsuario.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('Administrador.php');
                    alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

