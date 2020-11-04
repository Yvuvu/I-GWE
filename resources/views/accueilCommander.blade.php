<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>I GWE</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href={{asset("assets/img/favicon.png")}} type="image/x-icon"> 

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/vendors/bootstrap/css/bootstrap.min.css")}}> 

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/vendors/font-awesome/css/fontawesome-all.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/vendors/slick-carousel/slick.css")}}> 
    <link rel="stylesheet" type="text/css" href={{asset("assets/fonts/themify-icons.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/vendors/magnific-popup/magnific-popup.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/hovereffects.css")}}> 
    <!-- Theme Styles -->
    <link href={{asset("assets/css/scrolling-nav.css")}} rel="stylesheet">
    <link href={{asset("https://unpkg.com/aos@2.3.1/dist/aos.css")}} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/theme.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/styles.css")}}>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
			integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
			crossorigin=""/>
			<link rel="stylesheet" href={{asset("assets/css/geocoder.css")}}>
			<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

			<link rel="stylesheet" href={{asset('assets/css/monstyle.css')}}>
  </head>
  <!-- End Head -->

  <body>
    <!-- Header -->
    <header id="top">
      <!-- Navbar --> 
			<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
				<div class="container">
					<a class="navbar-brand js-scroll-trigger" href="#page-top">I <span> GWE</span></a>  
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="ti-menu"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#top">Accueil</a>
							{{-- </li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#services">Véhicules</a>
							</li> --}}
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#about">A propos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger active" href="{{ url('accueilcommander')}}">Commander</a>
							</li>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#team">S'inscrire</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#price">Prix</a>
							</li>

							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="#portfolio">S'inscrire</a>							    
							</li> --}}
						</ul>
					</div>
				</div>
			</nav>
      <!-- End Navbar --> 
		</header>
		<div class="container conteneur">
			<div class="card text-center corps-tete">
				<div class="card-header">
					<ul class="nav card-header-pills tete-carte">
						<li class="nav-item">
							<a class="navbar-brand" href="#"><span class="rounded-circle"><i class="fa fa-bus fa-2x commandbus" width="30" height="30" alt="icone de bus"></i></span></a>
						</li>
						<li class="nav-item">
							<a class="navbar-brand" href="#"><i class="fa fa-motorcycle fa-2x" width="30" height="30" alt="icone de bus"></i></a>
						</li>
						<li class="nav-item">
							<a class="navbar-brand" href="#" tabindex="-1"><i class="fa fa-taxi fa-2x" width="30" height="30" alt="icone de bus"></i></a>
						</li>
					</ul>
				</div>
				<div class="card-body corps-carte" id="mapid"></div>	
				<div class="card-footer bg-transparent border-success">
					<span style=""><b> Montant : </b></span><br>
					<span><b> Commander : </b></span>
				</div>			
			</div>
			
		</div>



		<!--Champs de recherche-->
		{{-- <p>
				<label for="champ-ville">Ville : </label>
				<input type="text" id="champ-ville">
		</p>
		<p>
				<label for="champ-distance">Distance : </label>
				<input type="range" min="1" max="200" id="champ-distance">
		</p>
		<p id="valeur-distance"></p> --}}



		<footer class="bg-dark py-5">
				<div class="container">
						<div class="row">
								<div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
										<small class="text-white"><a class="text-white" href="https://webthemez.com/free-bootstrap-templates/">Bootstrap Theme</a> by WebThemez. <br/>&copy; All Rights Reserved</small>
								</div>
				
								<div class="col-md-4 align-self-center">
										<ul class="list-inline text-center text-md-right mb-0">
										<li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
												<a class="text-white" target="_blank" href="https://www.facebook.com/Maxi">
												<i class="fab fa-facebook"></i>
												</a>
										</li>
										<li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
												<a class="text-white" target="_blank" href="https://www.instagram.com/Maxi">
												<i class="fab fa-instagram"></i>
												</a>
										</li>
										<li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
												<a class="text-white" target="_blank" href="https://twitter.com/Maxi">
												<i class="fab fa-twitter"></i>
												</a>
										</li>
										<li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
												<a class="text-white" target="_blank" href="https://dribbble.com/Maxi">
												<i class="fab fa-dribbble"></i>
												</a>
										</li>
										</ul>
								</div>
						</div>
				</div>
		</footer>
					
				
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>
		<script src={{asset("assets/js/geocoder.js")}}></script>
		<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
		<script src={{asset("assets/js/carte.js")}}></script>
		<script src={{asset("assets/vendors/jquery.min.js")}}></script>
    <script src={{asset("assets/vendors/jquery.migrate.min.js")}}></script>
    <script src={{asset("assets/vendors/popper.min.js")}}></script>
    <script src={{asset("assets/vendors/bootstrap/js/bootstrap.min.js")}}></script>
    <script src={{asset("assets/vendors/jquery-easing/jquery.easing.min.js")}}></script>

    <!-- Components Vendor  --> 
    <script src={{asset("assets/vendors/slick-carousel/slick.min.js")}}></script>
    <script src={{asset("assets/vendors/magnific-popup/jquery.magnific-popup.min.js")}}></script>
    <script src={{asset("assets/vendors/counters/waypoint.min.js")}}></script>
    <script src={{asset("assets/vendors/counters/counterup.min.js")}}></script>

		{{-- <script src={{asset("assets/contact/jqBootstrapValidation.js")}}></script> --}}
    <script src={{asset("assets/js/scrolling-nav.js")}}></script>
    <!--Plugin Initialize-->
    {{-- <script src={{asset("assets/js/global.js")}}></script> --}}

    <!-- Theme Components and Settings --> 
    <script src={{asset("assets/vendors/carousel.js")}}></script>
		<script src={{asset("assets/vendors/counters.js")}}></script>
		
   
	
				
       
	</body>
</html>