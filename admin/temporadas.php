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

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT * from temporada";
      if ($result = $connection->query($query)) {
      ?>
      <div class="row" id="añadir">
        <div class="col-md-3">
          <a href="anadirtemporada.php">
            <img src="añadirtemporada.png" width="40" height="40">
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
      <div class="col-md-10"> 
          <!-- PRINT THE TABLE AND THE HEADER -->
          <table class="table table-hover table-bordered" id="tabla">
          <thead>
            <tr>
              <th scope="col">IdTemporada</th>
              <th scope="col">Año</th>
              <th scope="col">Fecha de inicio</th>
              <th scope="col">Fecha de fin</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td>".$obj->idtemporada."</td>";
                echo "<td>".$obj->nombre."</td>";
                echo "<td>".$obj->fechainicio."</td>";
                echo "<td>".$obj->fechafin."</td>";
                echo "<td><a href='editartemporada.php?id=$obj->idtemporada'><img src='editar2.png' width='35px' height='35px'/></a></td>";
                echo "<td><a href='eliminartemporada.php?id=$obj->idtemporada'><img src='borrar2.png' width='35px' height='35px'/></a></td>";
              echo "</tr>";
            
          }

          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
    </tbody>
    </table>
    </div>
    </div>
    
    

    </div>
  </body>
</html>
