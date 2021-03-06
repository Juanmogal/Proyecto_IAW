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
<div class="row justify-content-end" id="barra">
    <div clas="col-md-6">
      <nav class="navbar navbar-light bg-light">
        <form method="post" class="form-inline" action="buscarjugadores.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Filtrar por nombre..." aria-label="Search" id="barrabusqueda" name="busquedajugadores">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="botonbuscar">Buscar</button>
          </form>
      </nav>
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
    
      //MAKING A SELECT QUERY
      /* Consultas de selección devuelven un conjunto de resultados */
        $query="select  J.nombre as nombrejugador, J.apellidos as apellidosjugador, E.nombre as equipo, P.numerocamiseta as dorsal, J.foto as fotojugador
        FROM equipo AS E
        JOIN pertenece AS P ON E.idequipo = P.idequipo
        RIGHT JOIN jugador AS J ON P.idjugador = J.idjugador";
      if ($result = $connection->query($query)) {
      echo "<div class='row justify-content-center'>";
          while($obj = $result->fetch_object()){   
            echo "<div class='col-md-3'>";
            echo "<div class='card'>";
            echo "<div class='d-flex align-items-center' style='witdh:220px;height:270px'><img class='rounded mx-auto d-block img-fluid' width='220px' height='220px' src='".$obj->fotojugador."'id='fotojugador'/></div>";
            echo "<div class='card-body'>";
            echo "<div class='card-title' id='textocards'><b>".$obj->nombrejugador." ".$obj->apellidosjugador."</b></div>";
            echo "<div class='card-title' id='textocards'>".$obj->equipo."</div>";
            echo "<div class='card-title' id='textocards'>".$obj->dorsal."</div>";
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

    ?>
          
    </div>
  </body>
</html>
