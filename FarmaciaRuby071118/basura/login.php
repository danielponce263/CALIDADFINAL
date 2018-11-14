<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: partials/header.php');    
  }

  require '../controller/database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {    
    
    $query = "SELECT id, email, password FROM USERS WHERE email ='".$_POST['email']."'AND password = '".$_POST['password']."'";
    $consul = mysqli_query($conn, $query);
    $results = mysqli_fetch_array($consul);
    
    $message = '';   
    
    if (count($results) >0) {
      $_SESSION['user_id'] = $results["id"];
      header("Location: partials/header.php");
      #echo '<script>location.href="partials/header.php;</script>';
    } else {
      $message = 'Perdon, No coincide los datos ingresados';
    }
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../controller/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="diseño/Login.css" >
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Ingresar</h1>
    <span>o <a href="signup.php">Registrar Empleado</a></span>

      <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="&#128272;Usuario">
      <input name="password" type="password" placeholder="&#9919;Contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
