<?php

  //Open the session
  session_start();

  if (isset($_SESSION["email"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
    var_dump($_SESSION);
  
  if ($_SESSION["email"] == "admin@admin") {
    header("Location: admin/jugadores.php");
    
  } else {
    header("Location: areatecnica/areatecnica.php");
  }
  
  
  } 
  
  
  else {
    session_destroy();
   header("Location: login/login.php");    
  }


 ?>