<?php session_start();

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo']!='admin')
    {
        session_destroy();
        header("Location: ../login/login.php");
    }



?>