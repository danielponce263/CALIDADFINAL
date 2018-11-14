<!DOCTYPE html>
<html lang="es">
<head>
    <title>BoticasRuby-Tecnico-Farmaceutico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css"href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>
       var parametro;
       function popupx(){
           parametro=window.open("php/ventana_producto.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_producto";
           parametro.document.getElementById('2').value="nombre_producto";
           parametro.document.getElementById('3').value="laboratorio_producto";
           parametro.document.getElementById('4').value="precio_producto";
       }

       function popup1(){
           parametro=window.open("php/ventana_cliente.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_cliente";
           parametro.document.getElementById('2').value="nombre_cliente";
           parametro.document.getElementById('3').value="apellidos_cliente";
           parametro.document.getElementById('4').value="dni_cliente";
           parametro.document.getElementById('5').value="telefono_cliente";
       }

       function popup4(){
           parametro=window.open("php/ventana_venta.php","","width=600,height=400");
           parametro.document.getElementById('1').value="IDCV";
           parametro.document.getElementById('2').value="NombreCV";
           parametro.document.getElementById('3').value="DNICV";
           parametro.document.getElementById('4').value="IDMV";
           parametro.document.getElementById('5').value="SubTV";
           parametro.document.getElementById('6').value="IGVV";
           parametro.document.getElementById('7').value="TotalV";
       }

       function popup3(){
        window.alert("Se eliminó el elemento");
       }

   </script> 
</head>
<body>


<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rubi.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Lozano Rodriguez, David Gustavo</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Tecnico Farmaceutico</span></li>
        <a href="TecnicoFarmaceutico.php" class="x"><img src="imagenes/icon-inicio.png" class="b">VOLVER ATRAS</a>
        </ul>
</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
<br/><br/>

        <form class="form-horizontal" action="php/seguir_agregando.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
        <div class="h2-titulo"><h2>Registro de Venta</h2></div>
        <div class="container">
        <h3>Nueva Venta</h3>

            <div class="form-group">
                <label class="control-label col-sm-2" for="id_producto">Codigo Producto:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_producto" name="id_producto" placeholder="CodigoProducto" readonly required>
                    <button type="button" class="btn btn-primary" onclick="popupx()">Buscar</button>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_producto">Nombre Producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control"  id="nombre_producto" name="nombre_producto" placeholder="NombreProducto" readonly required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="laboratorio_producto">Laboratorio Producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="labortaorio_producto" name="laboratorio_producto" placeholder="LaboratorioProducto" readonly required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="precio_producto">Precio Producto:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="precio_producto" name="precio_producto" placeholder="PrecioProducto" readonly required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad_venta">Cantidad:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cantidad_venta" name="cantidad_venta" placeholder="Cantidad" required>
                </div>
            </div>
            <input type="submit" value="Agregar" class="btn__enviar">
            </form>

          
            

            <table class="table">
                <!--<thead>
                    <tr>
                        <th>ID</th>
                        <th>dni_cliente</th>
                        <th>id_venta</th>
                        <th>id_producto</th>
                        <th>nombre_producto</th>
                        <th>precio_producto</th>
                        <th>cantidad_ventas</th>
                        <th>precio_total</th>
                    </tr>
                </thead>-->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Total/u</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $insertarx="SELECT id_ventas FROM ventas ORDER by id_ventas DESC LIMIT 1";

                $result=mysqli_query($conexion,$insertarx);
                $row=mysqli_fetch_array($result);
                $id_venta = $row["id_ventas"];

                $sql= "SELECT idventa_espera,dni_cliente,id_venta,id_producto,nombre_producto,precio_producto,cantidad_ventas,precio_total FROM venta_espera WHERE id_venta = '$id_venta'" ;
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <!--<td><?php //echo $mostrar['idventa_espera']  ?></td>
                    <td><?php //echo $mostrar['dni_cliente']  ?></td>
                    <td><?php //echo $mostrar['id_venta']  ?></td>-->
                    <td><?php echo $mostrar['id_producto']  ?></td>
                    <td><?php echo $mostrar['nombre_producto']  ?></td>
                    <td><?php echo $mostrar['precio_producto']  ?></td>
                    <td><?php echo $mostrar['cantidad_ventas']  ?></td>
                    <td><?php echo $mostrar['precio_total']  ?></td>

                </tr>
                <?php
                }
                ?>
            </table>
            <div class="col-lg-12" style="margin-top:2px;">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="col-xs-5 col-sm-5 col-md-5">
                            <br/>
                            <label>TOTAL A PAGAR: S/.</label>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                            <?php
                                include 'php/conexion.php';
                                $insertarx="SELECT venta_total FROM ventas ORDER by id_ventas DESC LIMIT 1";

                                $result=mysqli_query($conexion,$insertarx);
                                $row=mysqli_fetch_array($result);
                            ?>
                            <input type="text" name="Total" id="Total" class="form-control" value="<?php echo $row['venta_total']?>"/ readonly>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4"></div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3""></div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <form class="form-horizontal" action="TecnicoFarmaceutico.php" method="post" class="form-register" onsubmit="return validar()" name="form5" enctype="multipart/form-data">
                        <input type="submit" value="Finalizar" class="btn__enviar2">
                        </form>
                    </div>
            </div>

            
            
        
     </div> 

    
    <script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('../Alquiler.php');
	});
    </script>

    <footer>

    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
<script src="comportamiento/factura.js"></script>
<script type="text/javascript" src="comportamiento/jquery.min.js"></script>
</body>
</html>