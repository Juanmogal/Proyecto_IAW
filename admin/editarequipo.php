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
      <?php if (!isset($_POST["nom"])) : ?>
        
       <?php 
      

//CREACION VARIABLE GET



//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
     $query="SELECT * from equipo WHERE idequipo='".$_GET['id']."'";

    if ($result = $connection->query($query)) {
        $obj = $result->fetch_object();
    
    }

    ?>
<form method="post">
  <div class="row justify-content-center">
    <div class="col-md-5">
  <div class="form-group">
    <label id="camposregistro">Nombre</label>
    <input type="text" class="form-control" name="nom" value="<?php echo "$obj->nombre" ?>" required>
  </div>
  <div>
    <label id="camposregistro">Foto equipo</label>
    <input type="file" name="image"/>
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
    $connection->set_charset("utf8");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
   


    //MAKING A SELECT QUERY
    /* Consultas de selección que devuelven un conjunto de resultados */
    $query="UPDATE equipo SET nombre='".$_POST['nom']."' WHERE idequipo = '".$_GET['id']."'";
    
   
if ($result = $connection->query($query)) {
    

}
header('Location:equipos.php');
?>

<?php endif ?>

</div>
    
</body>
</html>