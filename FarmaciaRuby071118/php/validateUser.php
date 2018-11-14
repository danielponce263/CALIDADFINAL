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
$user = strtolower(mysqli_real_escape_string($con, $_POST['usuario']));
if ($user == null )
{
    echo '<span>Por favor complete todos los campos.</span>';
}
else
{
    $consulta = mysqli_query($con, "SELECT usuario FROM usuarios WHERE usuario = '$user'");
    if (mysqli_num_rows($consulta) > 0)
    {
        echo '<span>Este nombre de usuario ya esta registrado.</span>';
        /*$_SESSION["usuario"] = $user;
        echo '<script>location.href = "php/home.php"</script>';*/
    }
    else
    {
        echo '<span>Puede usar este nombre de usuario.</span>';
    }
}   
?>