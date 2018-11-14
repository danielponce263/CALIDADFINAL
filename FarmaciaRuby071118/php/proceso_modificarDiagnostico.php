<?php
include 'conexion.php';
$maquina_id = $_REQUEST['maquina_id'];
$mecanico_id= $_POST["mecanico_id"];
$descripcion= $_POST["descripcion"];
$estado_maquina= $_POST["estado_maquina"];
$fecha_entrada= $_POST["fecha_entrada"];
$fecha_salida= $_POST["fecha_salida"];



	$insertar= "UPDATE mantenimiento SET mecanico_id=$mecanico_id, descripcion=$descripcion, estado_maquina=$estado_maquina, fecha_entrada=$fecha_entrada, fecha_salida=$fecha_salida WHERE maquina_id='$maquina_id' ";


	$resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'Error al registrarse';
	}else{
		echo 'Si se modifico';
	    header("location:../Tecnico.php" );
	}   
