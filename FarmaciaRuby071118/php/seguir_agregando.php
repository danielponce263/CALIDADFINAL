<?php
include 'conexion.php';
$id_producto=$_POST["id_producto"];
$nombre_producto=$_POST["nombre_producto"];
$precio_producto=$_POST["precio_producto"];
$cantidad_ventas=$_POST["cantidad_venta"];
$precio_total=$precio_producto * $cantidad_ventas;



$insertar3="SELECT id_venta,dni_cliente FROM venta_espera ORDER by id_venta DESC LIMIT 1";

$result=mysqli_query($conexion,$insertar3);
$row=mysqli_fetch_array($result);
$id_venta = $row["id_venta"];
$dni_cliente=$row["dni_cliente"];

//saca el valor de venta total de ventas
$insertarXX="SELECT venta_total FROM ventas WHERE id_ventas='$id_venta'";
$resultXX=mysqli_query($conexion,$insertarXX);
$rowXX=mysqli_fetch_array($resultXX);
$venta_total1=$rowXX["venta_total"];

$venta_totalfinal=$precio_total + $venta_total1;

var_dump($id_venta);
var_dump($dni_cliente);
var_dump($venta_total1);
var_dump($precio_producto);
var_dump($cantidad_ventas);
var_dump($precio_total);

$insertarFinal="UPDATE ventas SET venta_total='$venta_totalfinal' WHERE id_ventas='$id_venta'";
$resultadoFinal=mysqli_query($conexion,$insertarFinal);
if(!$resultadoFinal){
    echo 'Error al registrarse';
}else{
    echo 'Actualizo Venta total'; 
}      


$insertar2="INSERT INTO venta_espera(dni_cliente,id_producto,nombre_producto,precio_producto,cantidad_ventas,id_venta,precio_total) VALUES ('$dni_cliente','$id_producto','$nombre_producto','$precio_producto','$cantidad_ventas','$id_venta','$precio_total')";

$resultado2=mysqli_query($conexion,$insertar2);      
if(!$resultado2){
    echo 'Error al registrarse';
}else{
    header('Location: ../Agregarmas.php'); 
}      


?>