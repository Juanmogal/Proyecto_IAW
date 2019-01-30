<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="registro.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
      body {background-color: #2353B4;}
    </style>
</head>
<body>

<div class="container">
  <?php
      include_once "../header/header.php";
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
$connection->set_charset("uft8");

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
?>

      <?php endif ?>

</body>
</html>