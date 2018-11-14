
<!DOCTYPE html>
<html lang="es">
<head>
    <title>MaquinariasRocky-Alquiler</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <script>
       var parametro;
       function popup(){
           parametro=window.open("php/ventana_maquina.php","","width=400,height=300");
           parametro.document.getElementById('1').value="id_maquina";
           parametro.document.getElementById('2').value="nome";
           parametro.document.getElementById('3').value="marca";
       }

       function popup1(){
           parametro=window.open("php/ventana_cliente.php","","width=400,height=300");
           parametro.document.getElementById('1').value="id_cliente";
           parametro.document.getElementById('2').value="names";
           parametro.document.getElementById('3').value="apPat";
           parametro.document.getElementById('4').value="dni";

       }
   </script> 
</head>
<body>


<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rocky.png" alt="logo rocky" class="logo"></li>
    <li style="float:right"><a href="#">Salir</a></li>
    <li style="float:right"><a href="#">Lozano Rodriguez, David Gustavo</a></li>
    <li style="float:right"><a href="#">00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 75px;margin-bottom: 20px">Jefa de Alquiler</span></li>
        <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
        <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Informacion</a></li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Orden de Alquiler<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/añadir.png" class="b">Añadir Alquiler</a></li>
                <li class="h"><a href="#tab4" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Alquiler</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-nuevo.png" class="b">Clientes<img src="imagenes/abajo1.png" class="c"> </a>
            <ul>
                <li class="h"><a href="#tab5" class="x"><img src="imagenes/añadir.png" class="b">Añadir Cliente</a></li>
                <li class="h"><a href="#tab6" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Cliente</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-venta.png" class="b">Reportes<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab7" class="x"><img src="" alt="">Reporte Ventas</a></li>
                <li class="h"><a href="#tab8" class="x"><img src="" alt="">Reporte Mantenimiento</a></li>
            </ul>
        </li>
        <li><a href="#"><img src="imagenes/proveedor.png" class="b">Proveedores</a></li>
        <li><a href="#"><img src="imagenes/icon-ajustes.png" class="b">Ajustes</a></li>
    </ul>

</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
    <article id="tab1">
        <h1>INICIO</h1>
        <div class="usuarios">GESTIONAR USUARIO</div>
        <div class="catalogo">GESTIONAR CATALOGO</div>
        <div class="reportes">GESTINAR REPORTES</div>
    </article>
    <article id="tab2">
        <h1>MI INFORMACION</h1>
    </article>
    <article id="tab3">
    <div class="nav-form">
        <h5 class="barra">INICIO</h5><span class="barra-1">></span><h5 class="barra">ORDEN DE ALQUILER</h5><span class="barra-1">></span><h5 class="barra">Añadir Alquiler</h5>
        </div>
        <h2 class="h2-titulo">Añadir Alquiler</h2>
        <form action="php/save_alquiler.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
            <h2 class="form__titulo">REGISTRAR ALQUILER</h2>
            <div class="contenedor__inputs">
                <input type="button" value="Maquina" class="input-100" onclick="popup()"  required>
                <input type="text" id="id_maquina" name="id_maquina" placeholder="Nombre_Maquina" class="input-48" required>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre_Maquina" class="input-48" required>
                <input type="text" id="marca" name="marca" placeholder="Marca_Maquina" class="input-48" required>
                <input type="button" value="Cliente" class="input-100" onclick="popup1()"   required>
                <input type="text" id="id_cliente" name="id_cliente" placeholder="Nombre_Maquina" class="input-48" required>
                <input type="text" id="nom_cliente" name="nom_cliente   " placeholder="Nombre_Cliente" class="input-100" required >
                <input type="text" id="apPaterno" name="apPaterno" placeholder="ApellidoPaterno" class="input-48" required>
                <input type="text" id="dni" name="dni" placeholder="Dni" class="input-48" required >
                <input type="text" id="dias" name="dias" placeholder="Numero_dias" class="input-100" required>
                <input type="text" id="descripcion" name="descripcion" placeholder="Descripcion" class="input-100" required>
                <input type="submit" value="Registrar" class="btn__enviar">
            </div>
        </form>
    </article>

    <article id="tab4">
    <div class="nav-form">
        <h5 class="barra">INICIO</h5><span class="barra-1">></span><h5 class="barra">Alquiler</h5><span class="barra-1">></span><h5 class="barra">Visualizar Alquiler</h5>
        </div>
        <h2 class="h2-titulo">Visualizar Alquiler</h2>
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th><th class="colum-nombre">Nombre_Maquina</th><th>Marca_Maquina</th><th>Nombre_Cliente</th><th>Apellido_Paterno</th><th>dni</th><th>Num_dias</th><th>Descripcion</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql="SELECT al.id_alquiler, m.nombre, m.marca, c.nombre, c.apPaterno, c.dni, al.ndias, al.descripcion    
                      from alquiler al
                      JOIN maquina m on al.id_maquina=m.id_maquina  
                      JOIN cliente c on al.id_cliente=c.id_cliente ";

                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_alquiler']  ?></td>
                    <td><?php echo $mostrar['nombre']  ?></td>
                    <td><?php echo $mostrar['marca']  ?></td>
                    <td><?php echo $mostrar['nombre']  ?></td>
                    <td><?php echo $mostrar['apPaterno']  ?></td>
                    <td><?php echo $mostrar['dni']  ?></td>
                    <td><?php echo $mostrar['ndias']  ?></td>
                    <td><?php echo $mostrar['descripcion']  ?></td>
                <?php
                }
                ?>
            </table>
    </article>
    <article id="tab5">
    <div class="nav-form">
        <h5 class="barra">INICIO</h5><span class="barra-1">></span><h5 class="barra">CLIENTE</h5><span class="barra-1">></span><h5 class="barra">Añadir Cliente</h5>
        </div>
        <h2 class="h2-titulo">Añadir Cliente</h2>
        <form action="php/clientes.php" method="post" class="form-register" onsubmit="return validar()">
            <h2 class="form__titulo">REGRISTRO DE CLIENTE</h2>
            <div class="contenedor__inputs">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-100" required>
                <input type="text" id="apPaterno" name="apPaterno" placeholder="Apellido paterno" class="input-100" required>
                <input type="text" id="apMaterno" name="apMaterno" placeholder="Apellido materno" class="input-100" required>
                <input type="email" id="correo" name="correo" placeholder="Correo" class="input-100" required >
                <input type="text" id="dni" name="dni" placeholder="DNI" class="input-48" required>
                <input type="text" id="telefono" name="telefono" placeholder="Telefono" class="input-48" required>
                <input type="text" id="direccion" name="direccion" placeholder="Direccion" class="input-100" required>
                <input type="submit" value="Registrar" class="btn__enviar">
            </div>
        </form>
    </article>
    <article id="tab6">
        <div class="nav-form">
            <h5 class="barra">INICIO</h5><span class="barra-1">></span><h5 class="barra">USUARIO</h5><span class="barra-1">></span><h5 class="barra">Visualizar Usuario</h5>
        </div>
        <h2 class="h2-titulo">Visualizar Usuario</h2>
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th><th class="colum-nombre">Nombre</th><th class="colum-nombre">Ap. Paterno</th><th>Ap. Materno</th><th>Correo</th><th>dni</th><th>telefono</th><th>direccion</th><th>Accion</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql="SELECT * FROM cliente";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_cliente']  ?></td>
                    <td><?php echo $mostrar['nombre']  ?></td>
                    <td><?php echo $mostrar['apPaterno']  ?></td>
                    <td><?php echo $mostrar['apMaterno']  ?></td>
                    <td><?php echo $mostrar['correo']  ?></td>
                    <td><?php echo $mostrar['dni']  ?></td>
                    <td><?php echo $mostrar['telefono']  ?></td>
                    <td><?php echo $mostrar['direccion']  ?></td>
                <?php
                }
                ?>
            </table>
        </div>
    </article>
    <footer>

    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
</body>
</html>