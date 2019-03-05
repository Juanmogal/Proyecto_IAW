<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Login</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>
      body {background-image: url("fondo.jpg");}
    </style>
</head>
<body>

<?php
      session_start();
        //FORM SUBMITTED
        if (isset($_POST["email"])) {
          //CREATING THE CONNECTION
          $connection = new mysqli("localhost", "juan", "2asirtriana", "cbmontellano");
          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from usuario where
          email='$_POST[email]' and password=md5('$_POST[password]')";
          
          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result = $connection->query($consulta)) {
              //No rows returned
              if ($result->num_rows===0) {
                echo "<script type='text/javascript'>alert('El correo o contraseña introducidos son incorrectos');</script>";    
           
            } else {
                 while($obj = $result->fetch_object()) {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["email"]=$_POST["email"];
                //$_SESSION["password"]=$_POST["password"];
                $_SESSION["tipo"]=$obj->tipo;
                }
                header("Location: ../index.php");
              }
          } else {
            echo "Wrong Query";
          }
      } 
    ?>
<!--LOGIN-->
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>¡¡Bienvenido!!</h3>
				<div class="d-flex justify-content-end social_icon">
                    <a href="https://www.facebook.com/baloncesto.montellano"><span><i class="fab fa-facebook-square"></i></span></a>
                    <a href="https://www.youtube.com/user/Baloncestomontellano"><span><i class="fab fa-youtube"></i></span></a>
					<a href="https://twitter.com/cbmontellano?lang=es"><span><i class="fab fa-twitter-square"></i></span></a>
				</div>
			</div>
			<div class="card-body">
				<form method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="email" class="form-control" placeholder="Email" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<div class="form-group">
						<input type="submit" value="Entrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a id="textologin">¿Aún no perteneces a nuestro club?</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="../registro/registro.php" id="registrate">Regístrate</a>
                </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>