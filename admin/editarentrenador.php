<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../include/header.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		body {background-color: #2353B4;}
</style>
</head>
<body>
<div class="container">
  <?php
      include_once "headeradmin.php";
  ?>
        <?php
  //CREATING THE CONNECTION
        $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
        $connection->set_charset("uft8");

//TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
    exit();
        }

    ?>
      <?php if (!isset($_POST["dni"])) : ?>
        
       <?php 
      

//CREACION VARIABLE GET



//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
     $query="SELECT * from entrenador WHERE identrenador='".$_GET['id']."'";

    if ($result = $connection->query($query)) {
        $obj = $result->fetch_object();
    
    }

    ?>
    
      
    <form method="post">
  <div class="row justify-content-center">
    <div class="col-md-5">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nom" value="<?php echo "$obj->nombre" ?>" required>
  </div>
  <div class="form-group">
    <label>Apellidos</label>
    <input type="text" class="form-control" name="ape" value="<?php echo "$obj->apellidos" ?>" required>
  </div>
  <div class="form-group">
    <label>DNI</label>
    <input type="text" class="form-control" name="dni" maxlength="9" value="<?php echo "$obj->dni" ?>" required>
  </div>
  <div class="form-group">
    <label>Fecha nacimiento</label>
    <input type="date" class="form-control" name="fec" value="<?php echo "$obj->fechanacimiento" ?>">
  </div>
  <div class="form-group">
    <label>Número de licencia</label>
    <input type="text" class="form-control" name="num" value="<?php echo "$obj->numerolicencia" ?>">
  </div>
  <div class="form-group">
    <label>Telefono</label>
    <input type="text" class="form-control" name="tfno" maxlength="9" value="<?php echo "$obj->telefono" ?>">
  </div>
  <div class="form-group">
    <label>Direccion</label>
    <input type="text" class="form-control" name="dir" value="<?php echo "$obj->direccion" ?>">
  </div>
  <div>
    <label>Foto personal</label>
    <input type="file" name="image" required />
  </div>
  <br>
  <div class="row justify-content-center">
  <button type="submit" class="btn btn-primary">Editar</button>
  </div>
</div>
</div>
</form>


     
      <?php else: ?>
         
      <?php


    $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
    $connection->set_charset("uft8");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
   
    //MAKING A SELECT QUERY
    /* Consultas de selección que devuelven un conjunto de resultados */
    $query="UPDATE entrenador SET nombre='".$_POST['nom']."',apellidos='".$_POST['ape']."',
    dni='".$_POST['dni']."',fechanacimiento='".$_POST['fec']."',numerolicencia='".$_POST['num']."',telefono='".$_POST['tfno']."',direccion='".$_POST['dir']."' WHERE identrenador ='".$_GET['id']."'";
    
if ($result = $connection->query($query)) {
    

}
header('Location:entrenadores.php');
?>

<?php endif ?>

</div>
    
</body>
</html>