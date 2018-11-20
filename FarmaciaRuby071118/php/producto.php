<?php
session_start();
include 'conexion.php';

$nombre_producto=$_POST["nombre_producto"];
$laboratorio_producto=$_POST["laboratorio_producto"];
$tipo_producto=$_POST["tipo_producto"];
$desc_producto=$_POST["desc_producto"];
$img_producto = addslashes(file_get_contents($_FILES['img_producto']['tmp_name']));///File en bits,nombre temporal
//$insertar= "INSERT INTO maquina(nombre_maquina,marca,precio,stock) VALUES ('$nombre','$marca','$precio','$stock')";
$cantidad_producto=$_POST["cantidad_producto"];
$precio_producto=$_POST["precio_producto"];

$insertar= "INSERT INTO producto(nombre_producto,laboratorio_producto,tipo_producto,desc_producto,img_producto,cantidad_producto,precio_producto) VALUES ('$nombre_producto','$laboratorio_producto','$tipo_producto','$desc_producto','$img_producto','$cantidad_producto','$precio_producto')";

echo $resultado=mysqli_query($conexion,$insertar);      
     
if(!$resultado){
    echo 'ERROR AL REGISTRARSE';
}else{
    echo 'REGISTRADO EXITOSAMENTE';
    header("location:../AdministradorFarmacia.php" );
}     
?>