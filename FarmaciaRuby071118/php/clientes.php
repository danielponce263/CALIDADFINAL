<?php
include 'conexion.php';

$nombre_cliente=$_POST["nombre_cliente"];
$apellidos_cliente=$_POST["apellidos_cliente"];
$correo_cliente=$_POST["correo_cliente"];
$dni_cliente=$_POST["dni_cliente"];
$telefono_cliente=$_POST["telefono_cliente"];

//var_dump($nombre_cliente);
//var_dump($apellidos_cliente);
//var_dump($correo_cliente);
//var_dump($dni_cliente);
//var_dump($telefono_cliente);
//exit(1);

$insertar="INSERT INTO cliente(nombre_cliente,apellidos_cliente,correo_cliente,dni_cliente,telefono_cliente) VALUES ('$nombre_cliente','$apellidos_cliente','$correo_cliente','$dni_cliente','$telefono_cliente')";

$resultado=mysqli_query($conexion,$insertar);      
if(!$resultado){
    echo 'Error al registrarse';
}else{
    echo 'Usuario registrado exitosamente';
}      

?>