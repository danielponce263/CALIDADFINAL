<?php
include 'conexion.php';
$id_cliente=$_POST["id_cliente"];
$dni_cliente=$_POST["dni_cliente"];
$id_producto=$_POST["id_producto"];
$nombre_producto=$_POST["nombre_producto"];
$precio_producto=$_POST["precio_producto"];
$cantidad_ventas=$_POST["cantidad_venta"];
$precio_total=$precio_producto * $cantidad_ventas;

var_dump($id_cliente);
var_dump($precio_total);
$insertar1="INSERT INTO ventas(id_cliente,venta_total) VALUES ('$id_cliente','$precio_total')";


$resultado=mysqli_query($conexion,$insertar1);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Usuario registrado exitosamente';
}     

$insertar3="SELECT id_ventas FROM ventas ORDER by id_ventas DESC LIMIT 1";

$result=mysqli_query($conexion,$insertar3);
$row=mysqli_fetch_array($result);
$id_venta = $row["id_ventas"];




$insertar2="INSERT INTO venta_espera(dni_cliente,id_producto,nombre_producto,precio_producto,cantidad_ventas,id_venta,precio_total) VALUES ('$dni_cliente','$id_producto','$nombre_producto','$precio_producto','$cantidad_ventas','$id_venta','$precio_total')";

$resultado2=mysqli_query($conexion,$insertar2);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    header("Location: ../Agregarmas.php"); 
}      


?>