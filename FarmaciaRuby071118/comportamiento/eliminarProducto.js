function preguntarSiNo(id_producto){

	alertify.confirm('Eliminar Datos', '¿Está seguro que desea eliminar este registro?', 
					function(){ eliminarProducto(id_producto) }
                , function(){ alertify.error("SE CANCELÓ")});
}

function eliminarProducto(id_producto){


	cadena="id=" + id_producto;

		$.ajax({
			type:"POST",
			url:"php/eliminarProducto.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('AdministradorFarmacia.php');
                    alertify.success("ELIMINADO CON ÉXITO");
				}else{
					alertify.error("FALLÓ EL SERVIDOR");
				}
			}
		});
}