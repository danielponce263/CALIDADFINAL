<?php
include 'conexion.php';
$id= $_REQUEST['id'];
$nombre_producto=$_POST["nombre_producto"];
$laboratorio_producto=$_POST["laboratorio_producto"];
$tipo_producto=$_POST["tipo_producto"];
$desc_producto=$_POST["desc_producto"];
$img_producto = addslashes(file_get_contents($_FILES['img_producto']['tmp_name']));//File en bits,nombre temporal
$cantidad_producto=$_POST["cantidad_producto"];
$precio_producto=$_POST["precio_producto"];


if($img_producto!=""){
	$insertar= "UPDATE producto SET nombre_producto='$nombre_producto',laboratorio_producto='$laboratorio_producto',tipo_producto='$tipo_producto',desc_producto='$desc_producto',         img_producto='$img_producto',         cantidad_producto='$cantidad_producto',precio_producto='$precio_producto' WHERE id_producto='$id'";


echo $resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'ERROR AL REGISTRARSE';
	}else{
		echo 'MODIFICADO EXITOSAMENTE';
	    header("location:../AdministradorFarmacia.php" );
	}   
}

else{
	$insertar= "UPDATE producto SET nombre_producto='$nombre_producto',laboratorio_producto='$laboratorio_producto',tipo_producto='$tipo_producto',desc_producto='$desc_producto',         cantidad_producto='$cantidad_producto',precio_producto='$precio_producto' WHERE id_producto='$id'";


echo $resultado=mysqli_query($conexion,$insertar);      
	if(!$resultado){
	    echo 'ERROR AL REGISTRARSE';
	}else{
		echo 'MODIFICADO EXITOSAMENTE';
	    header("location:../AdministradorFarmacia.php" );
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