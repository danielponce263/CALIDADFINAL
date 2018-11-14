
function preguntarSiNoSi(id_maquina){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarMaquina(id_maquina) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarMaquina(id_maquina){

	cadena="id_maquina=" + id_maquina;

		$.ajax({
			type:"POST",
			url:"php/eliminarMaquina.php",
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
