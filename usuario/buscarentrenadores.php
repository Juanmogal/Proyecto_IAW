<?php
      include_once "../session/sessionusuario.php";
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
    include_once "../header/header.php";
?>

<!--Fin include cabecera-->
<div class="row justify-content-start" id="flechaatras">
    <div clas="col-md-6">
      <a href="entrenadores.php"><img src="back.png" width="40px" height="40px" id="fotoflecha"/> Volver atrás</a>
    </div>
</div>
    <?php
      
      //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
      $connection->set_charset("utf8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      $busqueda = $_POST['busquedaentrenadores'];
      //MAKING A SELECT QUERY
      /* Consultas de selección devuelven un conjunto de resultados */
      $query="select ent.nombre as nombreentrenador, ent.apellidos as apellidosentrenador, e.nombre as equipo, ent.foto as foto, t.nombre as temporada
      from equipo as e
      join entrena as en on e.idequipo = en.idequipo
      right join entrenador as ent on en.identrenador = ent.identrenador
      join temporada as t on en.idtemporada = t.idtemporada
      WHERE ent.nombre LIKE '%$busqueda%'";
      if ($result = $connection->query($query)) {
        if ($result->num_rows==0){
          echo "<div class='alert alert-danger alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    No existe ningún entrenador en nuestro club llamado $_POST[busquedaentrenadores]
                </div>";
        }else{
      echo "<div class='row justify-content-center' id='fotosbusqueda'>";
          while($obj = $result->fetch_object()){   
            echo "<div class='col-md-3'>";
            echo "<div class='card'>";
            echo "<div class='d-flex align-items-center' style='witdh:220px;height:270px'><img class='rounded mx-auto d-block img-fluid' width='190px' height='190px' src='".$obj->foto."'id='fotojugador'/></div>";
            echo "<div class='card-body'>";
            echo "<div class='card-title' id='textocards'><b>".$obj->nombreentrenador." ".$obj->apellidosentrenador."</b></div>";
            echo "<div class='card-title' id='textocards'>".$obj->equipo."</div>";
            echo "</div>";
            echo "</div>";                                                                                                                                                           
            echo "</div>";
          }
          echo "</div>";  
          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
    }
    ?>
          
    </div>
  </body>
</html>
