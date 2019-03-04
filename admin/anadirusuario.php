<?php
      include_once "../session/sessionadmin.php";
?>
<!DOCTYPE html>
<html lang="es">
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
<div class="container"> <!-- Inicio container -->
<!--Include cabecera-->
<?php
    include_once "../header/headeradmin.php";
?>
<!--Fin include cabecera-->
        <?php
  //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
        $connection->set_charset("utf8");

//TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
    exit();
        }

    ?>
      <?php if (!isset($_POST["dni"])) : ?>
        
       <?php 
      

//CREACION VARIABLE GET

    ?>
    
      
<form method="post">
  <div class="row justify-content-center">
    <div class="col-md-5">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nom" required>
  </div>
  <div class="form-group">
    <label>Apellidos</label>
    <input type="text" class="form-control" name="ape" required>
  </div>
  <div class="form-group">
    <label>DNI</label>
    <input type="text" class="form-control" name="dni" maxlength="9" required>
  </div>
  <div class="form-group">
    <label>Fecha nacimiento</label>
    <input type="date" class="form-control" name="fec">
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="tfno" maxlength="9">
  </div>
  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="dir">
  </div>
  <label>Tipo</label>
  <br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="usuario">
    <label class="form-check-label" for="inlineRadio1">Usuario</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="admin">
    <label class="form-check-label" for="inlineRadio2">Administrador</label>
  </div>
  <br>
  <br>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="ema">
  </div>
  <div class="form-group">
    <label>Contraseña</label>
    <input type="text" class="form-control" name="pass">
  </div>
  <div>
    <label>Foto personal</label>
    <input type="file" name="image"/>
  </div>
  <br>
  <div class="row justify-content-center">
  <button type="submit" class="btn btn-primary">Añadir</button>
  </div>
</div>
</div>
</form>


     
      <?php else: ?>
         
      <?php


    $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
    $connection->set_charset("utf8");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
   
    //MAKING A SELECT QUERY
    /* Consultas de selección que devuelven un conjunto de resultados */
    $query="INSERT INTO jugador (nombre, apellidos, dni, fechanacimiento, telefono, direccion, tipo, password, email)
            VALUES ('".$_POST['nom']."','".$_POST['ape']."','".$_POST['dni']."','".$_POST['fec']."','".$_POST['tfno']."','".$_POST['dir']."','".$_POST['tipo']."','".$_POST['pass']."','".$_POST['ema']."')";
    echo $query;
if ($result = $connection->query($query)) {
    
}
#header('Location:usuarios.php');
?>

<?php endif ?>

</div>
    
</body>
</html>