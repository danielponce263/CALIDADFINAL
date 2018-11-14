<?php
include 'conexion.php';
$id_maquina= $_REQUEST['id'];
$nombre=$_POST["nombre"];
$marca=$_POST["marca"];
$precio=$_POST["precio"];
$stock=$_POST["stock"];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));//File en bits,nombre temporal


if($Imagen!=""){
	$insertar= "UPDATE maquina SET nombre_maquina='$nombre',marca='$marca',precio='$precio',stock='$stock',         Imagen='$Imagen' WHERE id_maquina='$id_maquina'";


	$resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'Error al registrarse';
	}else{
		echo 'Si se modifico';
	    header("location:../Administrador.php" );
	}   
}
else{
	$insertar= "UPDATE maquina SET nombre_maquina='$nombre',marca='$marca',precio='$precio',stock='$stock'          WHERE id_maquina='$id_maquina'";


	$resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'Error al registrarse';
	}else{
		echo 'Si se modifico';
	    header("location:../Administrador.php" );
	}   
}


/*$insertar= "UPDATE maquina SET nombre_maquina='$nombre',marca='$marca',precio='$precio',stock='$stock',         Imagen='$Imagen' WHERE id_maquina='$id_maquina'";


$resultado=mysqli_query($conexion,$insertar);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
	echo 'Si se modifico';
    header("location:../Administrador.php" );
}      */

?>
<!--
<br/>
<a href="../Administrador.php">Ir al Inicio</a>-->