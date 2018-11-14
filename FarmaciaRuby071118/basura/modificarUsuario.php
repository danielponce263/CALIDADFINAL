<!DOCTYPE html>
<html lang="es">
<head>
    <title>MaquinariasRocky-Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Admin.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script>
        function ValidarUsuario(usuario)
        {
            $.ajax({
                url: "php/validateUsuario.php",
                type: "POST",
                data: "usuario="+usuario,
                success: function(resp){
                $('#resultadoUsuario').html(resp)
                alert(resp);
                }       
            });
        }

        function ValidarCorreo(correo)
        {
            $.ajax({
                url: "php/validateCorreo.php",
                type: "POST",
                data: "correo="+correo,
                success: function(resp){
                $('#resultadoCorreo').html(resp)
                alert(resp);
                }       
            });
        }
    </script>

</head>
<body>


<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rocky.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Luque Tarrillo, Julio Martin</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Administrador</span></li>
        <a href="Administrador.php" class="x"><img src="imagenes/icon-inicio.png" class="b">VOLVER ATRAS</a>
        </ul>
</nav>
<div class="secciones">
<br/><br/>
    <?php
    include 'php/conexion.php';
    $id = $_REQUEST['id'];
    $sql="SELECT * FROM usuarios WHERE id_usuario = '$id'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqli_fetch_array($result);
    $Default=$mostrar['rol'];
    var_dump($Default);
    ?>
    <form class="form-horizontal" action="php/proceso_modificarUsuario.php?id=<?php echo $mostrar['id_usuario'];?>" method="post" onsubmit="return validar()" enctype="multipart/form-data">
    <h2 class="form__titulo">Modificar Usuario</h2>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre" placeholder="Enter Nombre" name="nombre" 
                    value= "<?php echo $mostrar['nombre']; ?>" required> 
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido">Apellido:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="apellido" placeholder="Enter Apellidos" name="apellido" value= "<?php echo $mostrar['apellido']; ?>" required>
                </div>
            </div>

            <div class="form-group">        
                <label class="control-label col-sm-2" for="nombre">Tipo Usuario:</label>
                <div class="col-sm-9">
                <select  id="rol" class="form-control"  name="rol" required>
                    <option value="nulo" <?php if ($Default == "nulo") echo "selected"; ?>>-- No selecionado --</option>
                    <option value="vendedor" <?php if ($Default == "vendedor") echo "selected"; ?>>Vendedor</option>
                    <option value="tecnico" <?php if ($Default == "tecnico") echo "selected"; ?>>Tecnico</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Correo:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="correo" placeholder="Enter Correo" name="correo" 
                    value= "<?php echo $mostrar['correo']; ?>" required>
                    <button type="button" onclick="ValidarCorreo(document.getElementById('correo').value);" class="btn btn-primary">Verificar</button>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="usuario">Usuario:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="usuario" placeholder="Enter Usuario" name="usuario" 
                    value= "<?php echo $mostrar['usuario']; ?>" required>
                     <button type="button" onclick="ValidarUsuario(document.getElementById('usuario').value);"class="btn btn-primary">Verificar</button>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="clave">Contraseña:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="clave" placeholder="Enter Contraseña" name="clave" value= "<?php echo $mostrar['clave']; ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono">Telefono:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="telefono" placeholder="Enter Telefono" name="telefono" value= "<?php echo $mostrar['telefono']; ?>" required>
                </div>
            </div>

            <input type="submit" value="Modificar" class="btn__enviar">
    </form>
    
</div>
    <footer>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
</body>
</html>