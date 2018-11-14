<?php
session_start();
include 'conexion.php';
	$salida="";
	$query="SELECT * FROM maquina ORDER BY id_maquina";

	if(isset($_POST['consulta'])){ //si consulta existe
		$q = $mysqli->real_escape_string($_POST['consulta']);
		$query = "SELECT id_maquina,nombre_maquina,marca,precio,stock FROM maquina 
		WHERE id_maquina LIKE '%".$q."%' OR nombre_maquina LIKE '%".$q."%' OR marca LIKE '%".$q."%'
		OR precio LIKE '%".$q."%' OR stock LIKE '%".$q."%' ";
	}

	$resultado= $mysqli -> query($query);

	if($resultado->num_rows > 0){
		$salida.="<table class='tabla_datos'
					<thead>
						<tr>
						  <td>Id</td>
                          <td>Nombres</td>
                          <td>Marca</td>
                          <td>Precio</td>
                          <td>Stock</td>
                         </tr>
                     </thead>
                     <tbody>";
     while($fila = $resultado->fetch_assoc()){
     	$salida.="<tr>
     			  <td>".$fila['id_maquina']."</td>
                  <td>".$fila['nombre_maquina']."</td>
                  <td>".$fila['marca']."</td>
                  <td>".$fila['precio']."</td>
                  <td>".$fila['stock']."</td>
                  </tr>";

     }

     $salida.="</tbody></table>";
	}else{
		$salida.="NO HAY DATO :(";
	}

	echo $salida;
	$mysqli->close();

?>