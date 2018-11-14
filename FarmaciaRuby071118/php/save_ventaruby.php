<?php
include 'conexion.php';

$id_producto=$_POST["id_producto"];
$id_cliente=$_POST["id_cliente"];
$cantidad=$_POST["cantidad_venta"];
var_dump($id_producto);
var_dump($id_cliente);
var_dump($cantidad);

$insertar= "INSERT INTO ventas(id_producto,id_cliente,cantidad) VALUES ('$id_producto','$id_cliente','$cantidad')";

$resultado=mysqli_query($conexion,$insertar);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Usuario registrado exitosamente';
}      

?>