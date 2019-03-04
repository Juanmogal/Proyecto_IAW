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
      <?php if (!isset($_POST["entrenador"])) : ?>
        
      


  
<form method="post">
<div class="row">
  <!-- ENTRENADORES -->
  <div class="col-md-4">
  <div class="form-group">
      <label for="sel1">Entrenador:</label>
        <select class="form-control" id="sel1" name="entrenador">
          <?php
            $query="SELECT * from entrenador";
            if ($result = $connection->query($query)) {
              while($obj = $result->fetch_object()) {
                if($obj->identrenador==$_GET["identrenador"]){
                  echo  "<option selected value='".$obj->identrenador."' >".$obj->nombre." ".$obj->apellidos."</option>";
                }else{
                  echo  "<option value='".$obj->idjugador."' >".$obj->nombre." ".$obj->apellidos."</option>";

                }
              }
            }
          ?>
        </select>
    </div>
    </div>
    <!-- FIN ENTRENADORES -->

    <!-- EQUIPOS -->
    <div class="col-md-4">
    <div class="form-group">
      <label for="sel1">Equipo:</label>
        <select class="form-control" id="sel1" name="equipo">
          <?php
            $query="SELECT * from equipo";
            if ($result = $connection->query($query)) {
              while($obj = $result->fetch_object()) {
                if($obj->idequipo==$_GET["idequipo"]){
                echo  "<option selected value='".$obj->idequipo."' >".$obj->nombre."</option>";
                }else{
                  echo  "<option value='".$obj->idequipo."' >".$obj->nombre."</option>";

                }
              }
            }
          ?>
        </select>
    </div>
    </div>

    <!-- FIN EQUIPOS -->

    <!-- TEMPORADAS -->
    <div class="col-md-4">
    <div class="form-group">
      <label for="sel1">Temporada:</label>
        <select class="form-control" id="sel1" name="temporada">
          <?php
            $query="SELECT * from temporada";
            if ($result = $connection->query($query)) {
              while($obj = $result->fetch_object()) {
                if($obj->idtemporada==$_GET["idtemporada"]){
                echo  "<option selected value='".$obj->idtemporada."' >".$obj->nombre."</option>";
                }else{
                  echo  "<option value='".$obj->idtemporada."' >".$obj->nombre." </option>";

                }
              }
            }
          ?>
        </select>
    </div>
    </div>

    <!-- FIN TEMPORADAS -->

  <br>
  </div>
    <div class="row justify-content-center">
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
    
  </div>
  </div>
</form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->

     
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
    $query="UPDATE entrena SET idtemporada='".$_POST['temporada']."',idequipo='".$_POST['equipo']."',
    identrenador='".$_POST['entrenador']."' WHERE idtemporada = '".$_GET['idtemporada']."' AND identrenador = '".$_GET['identrenador']."' AND idequipo = '".$_GET['idequipo']."'";
    echo $query;
if ($result = $connection->query($query)) {

}
header('Location:entrena.php');
?>

<?php endif ?>

</div> <!-- fin container -->
    
</body>
</html>