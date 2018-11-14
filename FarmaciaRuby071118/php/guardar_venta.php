<?php
include 'conexion.php';


$id_cliente=$_POST["IDCV"];
$id_maquina=$_POST["IDMV"];
$sub_total=$_POST["SubTV"];
$igv=$_POST["IGVV"];
$total=$_POST["TotalV"];

$insertar= "INSERT INTO venta(id_cliente,id_maquina,subtotal,igv,total) VALUES ('$id_cliente','$id_maquina','$sub_total','$igv','$total')";

$resultado=mysqli_query($conexion,$insertar);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Usuario registrado exitosamente';
}      

?>