<?php
include 'conexion.php';
$id_usuario= $_REQUEST['id'];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$rol=$_POST["rol"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$telefono=$_POST["telefono"];



	$insertar= "UPDATE usuarios SET nombre='$nombre',apellido='$apellido',rol='$rol',correo='$correo',usuario='$usuario', clave='$clave', telefono='$telefono' WHERE id_usuario='$id_usuario' ";


	$resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'Error al registrarse';
	}else{
		echo 'Si se modifico';
	    header("location:../Administrador.php" );
	}   

/*else{
	$insertar= "UPDATE usuarios SET nombre='$nombre',apellido='$apellido',correo='$correo',usuario='$usuario', clave='$clave', telefono='$telefono' WHERE id_usuario='$id_usuario' ";


	$resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'Error al registrarse';
	}else{
		echo 'Si se modifico';
	    header("location:../Administrador.php" );
	}   
}*/
?>