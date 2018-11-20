<?php
session_start();
include 'conexion.php';
  $salida="";
  $query="SELECT * FROM producto ORDER BY id_producto";

  if(isset($_POST['consulta'])){ //si consulta existe
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT id_producto,nombre_producto,laboratorio_producto,tipo_producto,desc_producto,cantidad_producto,precio_producto FROM producto 
    WHERE id_producto LIKE '%".$q."%' OR nombre_producto LIKE '%".$q."%' OR laboratorio_producto LIKE '%".$q."%'
    OR tipo_producto LIKE '%".$q."%' OR desc_producto LIKE '%".$q."%' OR cantidad_producto LIKE '%".$q."%' OR precio_producto LIKE '%".$q."%' ";
  }

  $resultado= $mysqli -> query($query);

  if($resultado->num_rows > 0){
    $salida.="<table class='tabla_datos'
          <thead>
            <tr>
              <td>Id</td>
                          <td>Nombre</td>
                          <td>Laboratorio</td>
                          <td>Tipo</td>
                          <td>Descripcion</td>
                          <td>Cantidad</td>
                          <td>Precio</td>
                         </tr>
                     </thead>
                     <tbody>";
     while($fila = $resultado->fetch_assoc()){
      $salida.="<tr>
            <td>".$fila['id_producto']."</td>
                  <td>".$fila['nombre_producto']."</td>
                  <td>".$fila['laboratorio_producto']."</td>
                  <td>".$fila['tipo_producto']."</td>
                  <td>".$fila['desc_producto']."</td>
                  <td>".$fila['cantidad_producto']."</td>
                  <td>".$fila['precio_producto']."</td>
                  </tr>";

     }

     $salida.="</tbody></table>";
  }else{
    $salida.="NO HAY DATO";
  }

  echo $salida;
  $mysqli->close();

?>