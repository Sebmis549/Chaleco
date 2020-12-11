<!DOCTYPE html><!--Versión de HTML-->
<html lang= "es">


<head>
	<!--información técnica-->
	<title>Chaleco con Mangas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url();?>/Chaleco/assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/Chaleco/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Chaleco/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/Chaleco/assets/js/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/Chaleco/assets/css/css.css">
</head>

<body>

	<ul class="nav nav-pills justify-content-center pt-3">
		<li class="nav-item  bg-light pl-1" >
		  <a class="nav-link text-dark" href="<?php echo base_url();?>/index.php/Noticias/PrincipalAdmin">Principal</a>
		</li>
		<li class="nav-item bg-light pl-1">
		  <a class="nav-link text-dark" href="<?php echo base_url();?>/index.php/Noticias/PaginaPA">Mejor del mes</a>
	  </li>
	  <li class="nav-item pl-1">
	  <a href="<?php echo base_url();?>/index.php/Noticias/FormularioNoticia"><button type="button" class="btn btn-outline-success">Crear</button></a>
	  </li>
	  <li class="nav-item pl-1">
		  <button type="button" class="btn btn-outline-danger">Eliminar</button>
		</li>
		<li class="nav-item pl-1">
			<a href="<?php echo base_url();?>/index.php/Noticias/tablaNoticias"><button type="button" class="btn btn-outline-primary">Mostrar</button></a>
  		</li>
  </ul>


	<div class="container my-3" id=contenedorp>

			<div class="container p-3 my-3"><h3>Lo mejor de la primera semana</h3> </div>

			<div class="container p-3 my-3 row" id="noticia1">
				<div>
					<img class="img-fluid col-lg-8 col-md-3 col-sm-12" src="<?php echo base_url();?>/Chaleco/assets/img/elecciones.jpg" class="float-left" >
				</div>

				<div class="container p-3 my-3 col-lg-4 col-md-3 col-sm-12" >
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>   
				</div>

			</div>

	<br>
	<br>

		<div class="container p-3 my-3"><h3>Lo mejor de la segunda semana</h3>
		</div>

		<div class="container p-3 my-3 row" id="noticia2">
			<img class="img-fluid col-lg-5 col-md-3 col-sm-12" src="<?php echo base_url();?>/Chaleco/assets/img/covid.jpg" class="float-left" height="10%">
			<div class="container p-3 my-3 col-lg-4 col-md-3 col-sm-12">
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			</div>
		</div>

		<br>
		<br>
	
		<div class="container p-3 my-3"><h3>Lo mejor de la tercera semana</h3>   
		</div>

		<div class="container p-3 my-3 row" id="noticia3">
			<img class="img-fluid col-lg-5 col-md-3 col-sm-12" src="<?php echo base_url();?>/Chaleco/assets/img/amlo.jpg" class="float-left" >
			<div class="container p-3 my-3 col-lg-4 col-md-3 col-sm-12">
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			</div>
		</div>

		<br>
		<br>

		<div class="container p-3 my-3"><h3>Lo mejor de la cuarta semana</h3>   
		</div>

		<div class="container p-3 my-3 row" id="noticia4">
			<img class="img-fluid col-lg-5 col-md-3 col-sm-12" src="<?php echo base_url();?>/Chaleco/assets/img/gatell.jpg" class="float-left">
			<div class="container p-3 my-3 col-lg-4 col-md-3 col-sm-12"> 
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			</div>
		</div>
	</div>
</body>