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

    ?>
    
      
    <form action="anadirjugador.php" method="post" enctype="multipart/form-data">
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

  //CREAMOS LA CONEXION


    $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
    $connection->set_charset("uft8");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
    if (isset($_FILES['image']) && $_FILES['image']['name']!=''){
      // INSERTAR IMAGEN
        //Temp file. Where the uploaded file is stored temporary
        $tmp_file = $_FILES['image']['tmp_name'];
        //Dir where we are going to store the file
        $target_dir = "../img/jugadores/";
        //Full name of the file.
        $target_file = strtolower($target_dir . basename($_FILES['image']['name']));
        //Can we upload the file
        $valid= true;
        //Check if the file already exists
        if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $valid = false;
        }
        //Check the size of the file. Up to 2Mb
        if ($_FILES['image']['size'] > (2048000)) {
          $valid = false;
          echo 'Oops!  Your file\'s size is to large.';
        }
        //Check the file extension: We need an image not any other different type of file
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); // We get the entension
        if ($file_extension!="jpg" && $file_extension!="jpeg" && $file_extension!="png" && $file_extension!="gif") {
          $valid = false;
          echo "Only JPG, JPEG, PNG & GIF files are allowed";
        }
        if ($valid) {
          //Put the file in its place
          move_uploaded_file($tmp_file, $target_file);
          echo "PRODUCT ADDED";

            //MAKING A SELECT QUERY
            /* Consultas de selección que devuelven un conjunto de resultados */
            $query="INSERT INTO jugador (nombre, apellidos, dni, fechanacimiento, telefono, direccion,foto)
            VALUES ('".$_POST['nom']."','".$_POST['ape']."','".$_POST['dni']."','".$_POST['fec']."','".$_POST['tfno']."','".$_POST['dir']."','$target_file')";
 
         }
      }    
    else{
      $query="INSERT INTO jugador (nombre, apellidos, dni, fechanacimiento, telefono, direccion)
            VALUES ('".$_POST['nom']."','".$_POST['ape']."','".$_POST['dni']."','".$_POST['fec']."','".$_POST['tfno']."','".$_POST['dir']."')";
    }
echo $query;
    
if ($result = $connection->query($query)) {
    

}
         
      
header('Location:jugadores.php');

?>

<?php endif ?>

</div>
    
</body>
</html>