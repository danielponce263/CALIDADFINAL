
function preguntarEliminar(mecanico_id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDiagnostico(mecanico_id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDiagnostico(mecanico_id){

	cadena="mecanico_id=" + mecanico_id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDiagnostico.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('Tecnico.php');
                    alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}