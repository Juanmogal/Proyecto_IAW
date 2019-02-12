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
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="prueba.css">
  <!--Libreria font-awesome-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<!--Include cabecera-->
<?php
    include_once "../header/header.php";
?>
<!--Fin include cabecera-->
  <div class="row" id="carousel">
    <div class="col-md-12">
      <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
  <!--/.Indicators-->
  <!--Slides-->
    <div class="carousel-inner" role="listbox" id="carousel">
    <!--Primer slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="carousel1.png" height="280" >
    </div>
    <!--Fin primer slide-->
    <!--Segundo slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="carousel2.jpg" height="280">
    </div>
    <!--Fin Segundo slide-->
    <!--Tercer slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="carousel3.jpg" height="280">
    </div>
    <!--FIn tercer slide-->
  </div>
  <!-- FIn Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>
</div> <!-- Final carousel -->
<div class="row">
       
                <!--Start box news-->
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <!--news box-->
                        <div class="col-6 pb-1 pt-0 pr-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="femenino.jpg"
                                                 alt="Image description">
                                        </a>
                                    </div>
                                    
                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Baloncesto Femenino</a>

                                        <!--title and description-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Nueva victoria del cadete femenino</h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="masculino.jpg"
                                                 alt="Image description">
                                        </a>
                                    </div>
                                    
                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Baloncesto Masculino</a>

                                        <!--title and description-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Derrota contra el líder de la categoría</h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="infantiles.jpg"
                                                 alt="Image description">
                                        </a>
                                    </div>
                                    
                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Categorías infantiles</a>

                                        <!--title and description-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Nuestros niños disfrutan en los Juegos Deportivos Provinciales</h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <!--thumbnail-->
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="../header/logo.png"
                                                 alt="Image description">
                                        </a>
                                    </div>
                                    
                                    <!--title-->
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Nuestro club</a>

                                        <!--title and description-->
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">¡Conócenos!</h2>
                                        </a>
                                    </div>
                                    <!--end title-->
                                </div>
                                <!--end thumbnail-->
                            </div>
                        </div>
                        <!--end news box-->
                    </div>
                </div>
                <!--End box news-->
            </section>
            <!--END SECTION-->
        </div>
    </div>
</div>
</body>
</html>