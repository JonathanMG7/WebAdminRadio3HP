<?php	
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Web Administraci&oacute;n Radio 3HP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href=".">Radio3hp</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php if($id ==1) echo 'class="active"'; ?> ><a href="?id=1">RinconUnited</a></li>
              <li <?php if($id ==2) echo 'class="active"'; ?> ><a href="?id=2">MusicAndGol</a></li>
              <li <?php if($id ==3) echo 'class="active"'; ?> ><a href="?id=3">Granada</a></li>
			  <li <?php if($id ==4) echo 'class="active"'; ?> ><a href="?id=4">Trabel</a></li>
			  <li <?php if($id ==5) echo 'class="active"'; ?> ><a href="?id=5">Beats</a></li>
			  <li <?php if($id ==6) echo 'class="active"'; ?> ><a href="?id=6">CineE</a></li>
			  <li <?php if($id ==7) echo 'class="active"'; ?> ><a href="?id=7">ConstruyendoE</a></li>
			  <li <?php if($id ==8) echo 'class="active"'; ?> ><a href="?id=8">ComplementoF</a></li>
			  <li <?php if($id ==9) echo 'class="active"'; ?> ><a href="?id=9">DriveR</a></li>
			  <li <?php if($id ==10) echo 'class="active"'; ?> ><a href="?id=10">OnceI</a></li>
			  <li <?php if($id ==11) echo 'class="active"'; ?> ><a href="?id=11">Anfield</a></li>
			  <li <?php if($id ==12) echo 'class="active"'; ?> ><a href="?id=12">Endorfina</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <section id="contenedor">
		<?php
			if($id == 1){
				include "RinconUnited.php";
			}elseif($id == 2){
				include "MusicAndGol.php";
			}elseif($id == 3){
				include "Granada.php";
			}elseif($id == 4){
				include "Trabel.php";
			}elseif($id == 5){
				include "Beats.php";
			}elseif($id == 6){
				include "CineE.php";
			}elseif($id == 7){
				include "ConstruyendoE.php";
			}elseif($id == 8){
				include "ComplementoF.php";
			}elseif($id == 9){
				include "DriveR.php";
			}elseif($id == 10){
				include "OnceI.php";
			}elseif($id == 11){
				include "Anfield.php";
			}elseif($id == 12){
				include "Endorfina.php";
			}else{
		?>
			<h1>Selecciona tu programa</h1>
			<?php
			}
			?>
	</section>
    </div> <!-- /container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<script>
	$(document).on("ready",main);
	function main(){
		setInterval(function() {
			$("#cargarFacebook").load("facebook.html")
		}, 10000);
	}
	</script>
  </body>
</html>

}