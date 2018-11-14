<?php
include 'conexion.php';

$nombre=$_POST["nombre_cliente"];
$apPaterno=$_POST["apPaterno"];
$apMaterno=$_POST["apMaterno"];
$correo=$_POST["correo"];
$dni=$_POST["dni"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];


$insertar= "INSERT INTO cliente(nombre_cliente,apPaterno,apMaterno,correo,dni,telefono,direccion) VALUES ('$nombre','$apPaterno','$apMaterno','$correo','$dni','$telefono','$direccion')";

$resultado=mysqli_query($conexion,$insertar);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Usuario registrado exitosamente';
}      

?>