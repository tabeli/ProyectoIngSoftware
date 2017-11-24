<!DOCTYPE HTML>
<?php

require_once "database/dbConection.php";
require_once "models/Distribuidor.php";

?>
<html>
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="freehtml5.co" />

		
		<!-- 
		//////////////////////////////////////////////////////

		FREE HTML5 TEMPLATE 
		DESIGNED & DEVELOPED by FreeHTML5.co
			
		Website: 		http://freehtml5.co/
		Email: 			info@freehtml5.co
		Twitter: 		http://twitter.com/fh5co
		Facebook: 		https://www.facebook.com/fh5co

		//////////////////////////////////////////////////////
		-->

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		
		<!--  Fonts and icons     -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<link href="css/themify-icons.css" rel="stylesheet">
		
		<!-- No le muevas a esto-->
		<link href="css/paper-dashboard.css" rel="stylesheet"/>

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<?php
		$db = new Database();
		$dist = new Distribuidor($db);
		$data = $dist->readAll();

		

		?>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html">Cerca de ti<span> ...</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="index.html">Principal</a></li>
							<li><a href="menu.html">Catálogo</a></li>
							
							<li><a href="about.html">Acerca</a></li>
							<li class="active"><a href="contact.php">Distribuidores</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		<!-- </div> -->
	</nav>

	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1><em>Contactanos!</em></h1>
							<!--<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Checa nuestros distribuidores</h2>
					<p>En esta sección podrás buscar los distribuidores cercanos a ti, de modo que puedas contactarlos de manera sencilla dependiendo del lugar en el que te encuentres.</p>
					<p><a href="https://www.facebook.com/jaboneslaistmenabrava/" class="btn btn-primary btn-outline">Contactanos</a></p>
				</div>
			</div>

			
			<!--<div class="row">
				<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
					<form action="#" id="form-wrap">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Your Name</label>
								<input type="text" class="form-control" id="name">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Your Email</label>
								<input type="text" class="form-control" id="email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Your Message</label>
								<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
							</div>
						</div>

					</form>
				</div>
			</div>-->

		</div>
	</div>

	<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="header">
								<td><h1 class="title">Lista de distribuidores</h2></td>
								<br>
								<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por estado...">
							</div>

							<div class="content table-responsive table-full-width">
								<table id="myTable" class="table table-striped">
								  <tr class="header">
									<em><td>Estado</td></em>
									<em><td>Nombre</td></em>
									<em><td>Número</td></em>
									<em><td>Action</td></em>
									
								  </tr>
								
								  	<tr>
										<td>Mexicali Baja California</td>
										<td>Diana Martinez</td>
										<td>934-314-9141 </td>
										<td>
											<a href="create_procedure.html" class="btn btn-danger btn-fill btn-wd">Ver productos disponibles</a>
										</td>
									</tr>

									<tr>
										<td>Puebla</td>
										<td>Dani Cazares</td>
										<td>931-314-3153 </td>
										<td>
											<a href="create_procedure.html" class="btn btn-danger btn-fill btn-wd">Ver productos disponibles</a>
										</td>
									</tr>

									<tr>
										<td>Veracruz</td>
										<td>Claudia Olivaress</td>
										<td>922-145-9748</td>
										<td>
											<a href="create_procedure.html" class="btn btn-danger btn-fill btn-wd">Ver productos disponibles</a>
										</td>
									</tr>
									
								<?php 
									foreach( $data as $dist ){
										echo "<tr> 
												<td>".$dist->estado."</td>
												<td>".$dist->nombre."</td>
												<td>".$dist->numero."</td>
												<td>
													<a href=\"menu.html\" class=\"btn btn-danger btn-fill btn-wd\">Ver productos disponibles</a>
												</td>
											</tr>";
									}
								?> 

								</table>
							</div>

						</div>
						 <!--<a href="create_user.html" class="btn btn-success btn-fill btn-wd">Add personnel</a>-->
					</div>
				</div>
			</div>
		</div>



	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>La Istmeña –Brava–</h4>
					<p>Espacio creado para nuestros queridos clientes!</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.html">Principal</a></li>
						<li><a href="menu.html">Catálogo</a></li>
						<li><a href="about.html">Acerca</a></li>
						<li><a href="contact.php">Distribuidores</a></li>
					</ul>
				</div>

				<!--<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Landing Page</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Personal</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">e-Commerce</a></li>
					</ul>
				</div>-->

				<div class="col-md-4 col-md-push-1 fh5co-widget">
						<h4>Información de contacto</h4>
						<ul class="fh5co-footer-links">
							<li>Minatitlán, Veracruz <br> Contacto por redes sociales</li>
							<li><a href="tel://9221452664">+52 1 922 145 2664</a></li>
							<li><a href="mailto:bpastranag@hotmail.com">bpastranag@hotmail.com</a></li>
							<li><a href="http://https://https://www.facebook.com/jaboneslaistmenabrava/">facebook/jaboneslaistmenabrava/</a></li>
						</ul>
					</div>

			</div>

			<!--<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>-->

		</div>
	</footer>
	</div>

	<!--<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>-->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
        function myFunction() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            } 
          }
        }
	</script>
	
	</body>

	
	
</html>

