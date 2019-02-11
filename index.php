<?php

  //Open the session
  session_start();

  if (isset($_SESSION["email"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA
    var_dump($_SESSION);
  
  if ($_SESSION["tipo"] == "admin") {
    header("Location: paginaprincipal/paginaprincipaladmin.php");
    
  } else {
    header("Location: paginaprincipal/paginaprincipalusuario.php");
  }

  } 
  else {
    session_destroy();
   header("Location: login/login.php");    
  }


 ?>