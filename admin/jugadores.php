<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT * from jugador";
      if ($result = $connection->query($query)) {

        

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>IdJugador</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>DNI</th>
              <th>Fecha nacimiento</th>
              <th>Telefono</th>
              <th>Direccion</th>
          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td>".$obj->idjugador."</td>";
                echo "<td>".$obj->nombre."</td>";
                echo "<td>".$obj->apellidos."</td>";
                echo "<td>".$obj->dni."</td>";
                echo "<td>".$obj->fechanacimiento."</td>";
                echo "<td>".$obj->telefono."</td>";
                echo "<td>".$obj->direccion."</td>";
                echo "<td><a href='editarjugador.php?id=$obj->idjugador'><img src='editar.jpg' width='40px' height='40px'/></a></td>";
                echo "<td><a href='eliminarjugador.php?id=$obj->idjugador'><img src='eliminar.png' width='30px' height='30px'/></a></td>";
              echo "</tr>";
          }

          
          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>
    </div>
  </body>
</html>
