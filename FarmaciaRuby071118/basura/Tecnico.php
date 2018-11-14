<!DOCTYPE html>
<html lang="es">
<head>
    <title>MaquinariasRocky-Tecnico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

</head>
<body>

<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
    <ul class="nav-top">
        <li><img src="imagenes/logo_rocky.png" alt="logo rocky" width="180px" height="40px" style="margin-left: 20px"   class="active"></li>
        <li style="float:right"><a href="pages/logout.php">Salir</a></li>
        <li style="float:right"><a href="#">Lozano Rodriguez, David Gustavo</a></li>
        <li style="float:right"><a href="#">00:10:30</a></li>
    </ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">
        <li style="margin-bottom: 25px;" ><img src="imagenes/apoyar.png" alt="logo-administrador"  style="margin:20px 62px"  class="activo">
            <span style="color: aqua;text-align: center;margin-left: 90px;margin-bottom: 20px">Tecnico</span></li>
        <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
        <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Informacion</a></li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Diagnostico <img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/añadir.png" class="b">Añadir Diagnostico</a></li>
                <li class="h"><a href="#tab4" class="x"><img src="imagenes/ojo.png" class="b">Ver Diagnostico</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-venta.png" class="b">Reporte <img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab5" class="x"><img src="imagenes/añadir.png" class="b">Crear reporte de mantenimiento</a></li>
                <li class="h"><a href="#tab6" class="x"><img src="imagenes/añadir.png" class="b">Crear reporte de ventas</a></li>
            </ul>
        </li>
        <li><a href="#"><img src="imagenes/icon-ajustes.png" class="b">Ajustes</a></li>
    </ul>

</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
    <!-- <h2>CSS Template</h2>-->
    <article id="tab1">
    <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a1">HOME</a>
        </div>
        <div class="h2-titulo"><h2>Inicio</h2></div>
        <div class="ini-gestionar">
        <button type="button" class="btn btn-success btn-lg"><a href="#tab3" class="x">GESTIONAR MAQUINARIAS</a></button>
        </div>
        <div class="ini-gestionar">
        <button type="button" class="btn btn-info btn-lg" ><a  href="#tab5" class="x"> GESTIONAR DIAGNOSTICOS</a></button>
        </div>
        <div class="ini-gestionar">
        <button type="button" class="btn btn-warning btn-lg"><a href="#"></a> GESTIONAR REPORTES</button>
        </div>    

    </article>

    <article id="tab2"></article>
    <article id="tab3">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">DIAGNOSTICO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Añadir Diagnostico</a>
        </div>
        <div class="h2-titulo"><h2>Añadir Diagnostico</h2></div>
        <div class="container">
        <h3>Registrar Diagnostico</h3>
        <form class="form-horizontal" action="php/mantenimiento.php" method="post" onsubmit="return validar()" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-sm-2" for="descripcion">Descripcion:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="descripcion" placeholder="Enter Descripcion" name="descripcion" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="maquina_id">Maquinaria:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="maquina_id" placeholder="Enter Maquinaria" name="maquina_id" required>
                </div>
            </div>

            
            <div class="form-group">        
                <label class="control-label col-sm-2" for="estado_maquina">Estado de maquina:</label>
                <div class="col-sm-9">
                <select  id="rol" class="form-control"  name="estado_maquina" required>
                    <option value="nulo">-- No selecionado --</option>
                    <option value="Reparacion" >En reparacion</option>
                    <option value="DarBaja">Dar de baja</option>
                </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="fecha_entrada">Fecha de inicio:</label>
                <div class="col-sm-9">
                    <input type="date" id="bday" name="fecha_entrada">
                </div>
            </div>


            <div class="form-group">
                    <label class="control-label col-sm-2" for="fecha_salida">Fecha de fin:</label>
                    <div class="col-sm-9">
                        <input type="date" id="bday" name="fecha_salida">
                    </div>
                </div>

            <input type="submit" value="Registrar" class="btn__enviar">

        </form>
        </div>

    </article>
    
    
    <article id="tab4">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">DIAGNOSTICO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Ver Diagnostico</a>
        </div>
        <h2 class="h2-titulo">Ver Diagnostico</h2>
        <div class="container">
            <h3>Lista de Diagnosticos</h3>
            <p>Lista de Diagnosticos en curso en la empresa </p>

            <div class="form-1-2">
                <label for="caja_busqueda">Buscar:</label>
                <input type="text" name="caja_busquedax" id="caja_busquedax"></input>
            </div>

            <div id="datosx">
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th>Mecanico</th>
                          <th>Maquinaria</th>
                          <th>descripcion</th>
                          <th>Estado</th>
                          <th>Fecha Entrada</th>
                          <th>Fecha Salida</th>
                          <th>Accion1</th>
                        </tr>
                    </thead>
                    <?php
                    include 'php/conexion.php';
                    $sql="SELECT * FROM mantenimiento";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['mecanico_id']  ?></td>
                        <td><?php echo $mostrar['maquina_id']  ?></td>
                        <td><?php echo $mostrar['descripcion']  ?></td>
                        <td><?php echo $mostrar['estado_maquina']  ?></td>
                        <td><?php echo $mostrar['fecha_entrada']  ?></td>
                        <td><?php echo $mostrar['fecha_salida']  ?></td>
                        <td>
                        <button type="button" class="btn btn-info" onClick="window.location.href='modificarDiagnostico.php?id=<?php echo $mostrar['mecanico_id'];?>'">Editar</button>

                        <button class="btn btn-danger glyphicon glyphicon-remove" 
                        onclick="preguntarEliminar('<?php echo $mostrar['mecanico_id'] ?>')">                      
                        </button>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="container">
        <div id="tabla"></div>
   
        </div>
    </article>


    <footer>

    </footer>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
<script src="modificarDiagnostico.php"></script>
<script src="comportamiento/eliminarDiagnostico.js"></script>
<script src="php/eliminarDiagnostico.php "></script>
<script type="text/javascript" src="comportamiento/jquery.min.js"></script>

</body>
</html>