<?php
include 'conexion.php';


$maquina_id=$_POST["maquina_id"];
$descripcion=$_POST["descripcion"];
$estado_maquina=$_POST["estado_maquina"];
$fecha_entrada=$_POST["fecha_entrada"];
$fecha_salida=$_POST["fecha_salida"];
///File en bits,nombre temporal
//$insertar= "INSERT INTO maquina(nombre_maquina,marca,precio,stock) VALUES ('$nombre','$marca','$precio','$stock')";
$insertar= "INSERT INTO mantenimiento(mecanico_id,maquina_id,descripcion,estado_maquina,fecha_entrada,fecha_salida) VALUES (001,'$maquina_id','$descripcion','$estado_maquina','$fecha_entrada','$fecha_salida')";


$resultado=mysqli_query($conexion,$insertar);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
	echo 'Exito al registrarse';
    header("location:../Tecnico.php" );
}      

?>