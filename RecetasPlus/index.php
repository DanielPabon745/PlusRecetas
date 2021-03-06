<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>RecetasPlus</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/images/faviconRP.ico" />
<link rel="icon" href="images/faviconRP.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/Logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Inicio</a></li>
                 <li ><a href="#menu">Menú</a></li>
                 <li ><a href="#foods">Recetas</a></li>
                 <!--<li ><a href="#partners">Partners</a></li>-->
                 <!--<li ><a href="#contact">Contact</a></li>-->
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<div class="banner">
          <img src="images/back.jpg" alt="banner" class="img-responsive">
          <div class="caption">
            <div class="caption-wrapper">
              <div class="caption-info">              
              <i class="fa fa-coffee fa-5x animated bounceInDown"></i>
              <h1 class="animated bounceInUp">¡Aprende con Nosotros!</h1>
              <p class="animated bounceInLeft">Miles de recetas a un solo click, ven y comparte tu experiencia con nosotros.</p>
             <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
              </div>
            </div>
          </div>
</div>
<!-- #Slider Ends -->
</div>

<!-- Cirlce Starts -->
<div id="menu"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">RecetasPlus</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h2><i class="fa fa-camera-retro"></i> Recetas nuevas </h2>
   
     <?php
$host = "localhost";
$username = "root";
$db = "epiz_19830617_recetasPlusdb";
$pass = "";
// Create connection
$cont=0;
$conn= mysql_connect($host, $username, $pass) or die("Error al buscar la infor");
mysql_select_db($db, $conn) or die("No canciona");
$registro=mysql_query("SELECT ID_RECETA,NOMBRE_RECETA  FROM RECETAS LIMIT 20 OFFSET 6") or die("No canciona" .mysql_error());
while($reg=mysql_fetch_array($registro)){ ?>
    <a href="recipe1.php?variable=<?php echo $reg['ID_RECETA']; ?>">
      
        <h4><?php echo $reg['NOMBRE_RECETA']; ?></h4>
      
    </a>
  <?php }
 
?>
  </div>
    </div>
  </div>  
</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="foods"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Mojito de Naranja</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe1.html">Ver más</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Alitas de Pollo</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe2.html">Ver más</a></p> 
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Filetes Rusos</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe3.html">Ver más</a></p> 
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Cheesecake de pasión</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe4.html">Ver más</a></p> 
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Lomo al Horno</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe5.html">Ver más</a></p> 
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Rollitos de pollo</h2>
            <p>¿Te interesa? Síguenos...<br>
            <a href="recipe6.html">Ver más</a></p> 
        </figcaption>
    </figure> 
</div>
  </div>
    </div>
  </div>
</div>
<div class="footer text-center spacer">
Copyright 2017 DevStudio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>