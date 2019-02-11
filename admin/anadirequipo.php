<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Login</title>
	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
		body {background-color: #2353B4;}
</style>
</head>
<body>
<div class="container">
  <?php
      include_once "../header/headeradmin.php";
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
      <?php if (!isset($_POST["nom"])) : ?>
        
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
  <div>
    <label>Foto equipo</label>
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
    $connection->set_charset("uft8");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
   
    //MAKING A SELECT QUERY
    /* Consultas de selección que devuelven un conjunto de resultados */
    $query="INSERT INTO equipo (nombre)
            VALUES ('".$_POST['nom']."')";
    echo $query;
if ($result = $connection->query($query)) {
    

}
header('Location:equipos.php');
?>

<?php endif ?>

</div>
    
</body>
</html>