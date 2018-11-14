<?php
include 'conexion.php';
$id_producto=$_POST["id_producto"];
$nombre_producto=$_POST["nombre_producto"];
$precio_producto=$_POST["precio_producto"];
$cantidad_ventas=$_POST["cantidad_venta"];

var_dump($id_cliente);
exit(1);

$insertar3="SELECT id_venta,dni_cliente FROM venta_espera ORDER by id_venta DESC LIMIT 1";

$result=mysqli_query($conexion,$insertar3);
$row=mysqli_fetch_array($result);
$id_venta = $row["id_ventas"];
$dni_cliente=$row["dni_cliente"];





$insertar2="INSERT INTO venta_espera(dni_cliente,id_producto,nombre_producto,precio_producto,cantidad_ventas,id_venta) VALUES ('$dni_cliente','$id_producto','$nombre_producto','$precio_producto','$cantidad_ventas','$id_venta')";

$resultado2=mysqli_query($conexion,$insertar2);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    header('Location: ../Agregarmas.php'); 
}      


?>