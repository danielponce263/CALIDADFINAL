
<?php          
    session_start();

    if (isset($_SESSION['user_id'])) {
      header('Location: pages/partials/header.php');    
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SISTEMAS DE ALQUILER DE MAQUINARIAS</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="controller/assets/css/style.css">
    
  </head>
  <body>
    <h1>SISTEMA DE ALQUILER MAQUINARIAS ROCKY</h1>
    <img src="imagenes/logo_rocky.png" alt="logo rocky" style="height: 200px " class="img_logo"></img>
    <?php if(!empty($user)): ?>      
      <a href="pages/logout.php">
        Logout
      </a>
    <?php else: ?>      
      <h2>Ingresar o Registrar Empleado</h2>
      <a href="pages/login.php">Login</a> or
      <a href="pages/signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>
