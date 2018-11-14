<?php
error_reporting(0);
session_start();
$con = new mysqli("localhost", "root", "", "rocky");
if ($con->connect_errno)
{
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    exit();
}
//Valida que los campos de usuario y contraseña tengan datos para su validacion
@mysqli_query($con, "SET NAMES 'utf8'");
$correo = strtolower(mysqli_real_escape_string($con, $_POST['correo']));
if ($correo == null )
{
    echo 'Por favor complete el campo.';
    //echo '<span>Por favor complete el campo.</span>';
}
else
{
    $consulta = mysqli_query($con, "SELECT correo FROM usuarios WHERE correo = '$correo'");
    if (mysqli_num_rows($consulta) > 0)
    {
        echo 'Este correo ya esta en uso.';
        //echo '<span>Este correo ya esta en uso.</span>';
        /*$_SESSION["usuario"] = $user;
        echo '<script>location.href = "php/home.php"</script>';*/
    }
    else
    {
        echo 'Puede usar este correo.';
        //echo '<span>Puede usar este correo.</span>';
    }
}   
?>