<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>index</title>
  <!--Librerias de Boostrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!--Enlace con CSS-->
  <link rel="stylesheet" type="text/css" href="../header/header.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--Libreria font-awesome-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
  <body>
  <div class="container">
  <!--Include cabecera-->
    <?php
      include_once "../header/headerregistro.php";
    ?>
<?php if (!isset($_POST["nombre"])) : ?>
<form method="post">
  <div class="row justify-content-center">
    <div class="col-md-8">
  <div class="form-group">
    <label id="camposregistro">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
  </div>
  <div class="form-group">
    <label id="camposregistro">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
  </div>
  <div class="form-group">
    <label id="camposregistro">DNI</label>
    <input type="text" class="form-control" name="dni" maxlength="9" placeholder="DNI" required>
  </div>
  <div class="form-group">
    <label id="camposregistro">Fecha nacimiento</label>
    <input type="date" class="form-control" name="fecha" placeholder="Fecha Nacimiento">
  </div>
  <div class="form-group">
    <label id="camposregistro">Telefono</label>
    <input type="text" class="form-control" name="tfno" maxlength="9" placeholder="Teléfono de contacto">
  </div>
  <div class="form-group">
    <label id="camposregistro">Direccion</label>
    <input type="text" class="form-control" name="direccion" placeholder="Dirección">
  </div>
  <div class="form-group">
    <label id="camposregistro">Correo electronico</label>
    <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
  </div>
  <div class="form-group">
    <label id="camposregistro">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
  </div>
  <div class="row justify-content-center">
  <button type="submit" class="btn btn-primary">Registrar</button>
</div>
</div>
</div>
</form>

</div>
<?php else: ?>
<?php

//CREATING THE CONNECTION
$connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
$connection->set_charset("utf8");

//TESTING IF THE CONNECTION WAS RIGHT
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
  $query="INSERT INTO usuario (nombre, apellidos, dni, fechanacimiento, telefono, direccion,tipo,password,email)
        VALUES ('".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['dni']."','".$_POST['fecha']."','".$_POST['tfno']."',
        '".$_POST['direccion']."','usuario',md5('".$_POST['password']."'),'".$_POST['email']."')";
  
if ($result = $connection->query($query)) {




?>

   
<?php


    //Free the result. Avoid High Memory Usages

    unset($obj);
    unset($connection);

} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
header('Location: ../login/login.php');
?>

      <?php endif ?>

</body>
</html>