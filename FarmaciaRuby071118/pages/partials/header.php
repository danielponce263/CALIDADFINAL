<?php
    
  session_start();
  
  require '../../controller/database.php';
  
  if (isset($_SESSION['user_id'])) {
    $query = "SELECT id, email, password FROM USERS WHERE id ='".$_SESSION['user_id']."'";
    $consul = mysqli_query($conn, $query);
    $results = mysqli_fetch_array($consul);
  }
  else{
    header('Location: ../login.php');  
  }

  $user = null;
  
  if (count($results) > 0) {
    $user = $results;
  }

  header('Location: ../../Tecnico.php'); 

?>

<!DOCTYPE html>
<html>
  <head>   
    <title>SISTEMA DE ALQUILER DE MAQUINARIAS</title>
  </head>
  <body>
  <h1>MAQUINARIAS ROCKY</h1>
    
  <div>


    
  
   <br>
   <span><a href="../logout.php">Salir</a></span>

  </div>

  </body>
</html>