@extends('template')
@section('title', 'I GWE')
@section('banniere')
    <section class="hero-large hero">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src={{asset("assets/img/intro/banner-bg1.png")}} alt="Los Angeles" width="1100" height="500">
                <div class="container">
                <div class="carousel-caption">
                <h2>Déplacez-vous en sécurité</h2>
                <p>avec nos véhicules</p>
                </div> 
                </div>
            
            </div>
            <div class="carousel-item">
                <img src={{asset("assets/img/intro/banner-bg2.png")}} alt="Chicago" width="1100" height="500">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Déplacez-vous en toute confiance</h2>
                        <p>nos véhicules sont assurés</p><br>
                        <p>nos conducteurs ont un permis et sont respectueux </p>
                    </div>   
                </div>
            </div>
            <div class="carousel-item">
                <img src={{asset("assets/img/intro/banner-bg3.png")}} alt="New York" width="1100" height="500">
                <div class="container">
                <div class="carousel-caption">
                <h2>Commandez un véhicule</h2>
                <p> où que vous soyez, il vient à vous</p>
                </div>   
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
@endsection
@section('contenu')
<main role="main" class="mt-lg-5 m-0">
	
	<section class="wt-section" id="services">
        <div class="container">
		<div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
          <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
            <h2 class="mb-md-2">Nos véhicules</h2>
            <p class="lead text-muted">Tous nos véhicules sont assurés et nos conducteurs ont leur permis de conduire.
               Nos motos ne prennent qu'un passager, les taxis 5. Il n'y a pas de surcharges. Pour transporter des bagages, commandez nos bus et taxis.</p>
          </div>
		</div> 
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0 text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
              <div class="d-block mb-4">
                 <!-- <img src="assets/img/services/4.svg" width="85px" class="pr-4" alt="">   -->
                 <i class="fa fa-motorcycle fa-5x" ></i>
              </div>
              <h4 class="h5">Moto <span>I GWE</span></h4>
              <p>Appelez une moto en quelques clics et elle vient à vous.</p>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
             <div class="d-block mb-4">
                 <!-- <img src="assets/img/services/1.svg" width="85px" class="pr-4" alt="">   -->
                 <i class="fa fa-taxi fa-5x" ></i>
              </div>
              <h4 class="h5">Taxi I GWE</h4>
              <p>Commandez un taxi pour sortir en groupe en plein confort et en toute sécurité</p>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0 text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="300">
             <div class="d-block mb-4">
                 <!-- <img src="assets/img/services/5.svg" width="85px" class="pr-4" alt="">   -->
                 <i class="fa fa-bus fa-5x" ></i>
              </div>
              <h4 class="h5">Bus I GWE</h4>
              <p>Appelez nos bus pour vos déplacements en groupe, en famille. </p>
            </div>
          </div> 
        </div>
    </section> 

    <section class="wt-section bg-light" id="about">
        <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
            <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
                <h2 class="mb-md-2">A propos de I GWE</h2>
                <p class="lead text-muted"><i>I GWE</i> est une <strong>entreprise de virtualisation du transport.</strong> <i>I GWE</i> vous permet de vous déplacer comme vous voulez,
                     confortablement et à un coût raisonnable à bord de bus,taxi, moto. </p>
            </div>
            </div>
            <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
            <div class="col-md-5">
                    <img src={{asset("assets/img/moto.png")}} width="90%" class="rounded-md" alt="">
                </div>
                <div class="col-md-7"> 
                    <h3 class="mb-4 ">Moto <i>I GWE </i></h3>
                    <p class="text-muted">Nos moto sont assurés et ne prennent qu'un seul passager. 
                        Un casque est disponible pour le client. Les conducteurs de taxi ont tous un 
                        permis et ont été soumis à un test de psychologie.
                    Le tarif de nos motos est de 100f le kilomètre</p>
                </div>
            
            </div>
            <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
                <div class="col-md-5">
                        <img src={{asset("assets/img/bus.png")}} width="90%" class="rounded-md" alt="">
                </div>
                <div class="col-md-7"> 
                    <h3 class="mb-4 ">Bus <i>I GWE </i></h3>
                    <p class="text-muted">Nos bus sont en règle ainsi que les conducteurs. Choisissez 
                        nos bus VIP climatisés à 250f le kilomètre ou des bus ordinaires à 200f le 
                        kilomètre pour vos courses.</p>
                </div>            
            </div>
            <div class="row justify-content-between align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="200">
                <div class="col-md-5">
                        <img src={{asset("assets/img/taxi.png")}} width="90%" class="rounded-md" alt="">
                    </div>
                    <div class="col-md-7"> 
                        <h3 class="mb-4 ">Taxi <i>I GWE </i></h3>
                        <p class="text-muted">Nos taxis sont en règle de même que les conducteurs.
                            Vous avez le choix entre les taxis VIP climatisés à 250f le kilomètre
                            ou ceux ordinaires à 200f le kilomètre. </p>
                    </div>
                
                </div>
        </div>
    </section> 

    <section class="wt-section">
        <div class="container">
            <div class="row justify-content-between align-items-center" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="400">
                <div class="col-md-7"> 
                    <h3 class="mb-4">Our Mission and Goals</h3>
                    <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat!</p>
                </div>
            
            <div class="col-md-5">
                <img src="assets/img/about/2.jpg" width="90%" class="rounded-md" alt="">
                </div>
            </div>
        </div>
    </section> 
    <section class="wt-section" id="team"> 
    <div class="container">
            <div class="row justify-content-md-center text-center pb-lg-5">
                <div class="col-md-12">
                    <h2 class="h1">Besoin de véhicule?</h2>
                    <p> Suivez ces étapes pour bénéficier de nos services </p>
                </div>
            </div>
            <div class="portfolio-item row" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="100">
                <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img1.jpg" alt="">
                    </div>                     
                </div> 
                <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src={{asset("assets/img/portfolio/img2.jpg")}} alt="">                            
                    </div>                     
                </div> 
                <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img3.jpg" alt="">                            
                    </div>                     
                </div>
                <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img4.jpg" alt="">                            
                    </div>                    
                </div> 
                <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img5.jpg" alt="">                            
                    </div>                     
                </div> 
                <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img6.jpg" alt="">                            
                    </div>                     
                </div> 
                <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img7.jpg" alt="">                            
                    </div>                     
                </div> 
                <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
                    <div class="hovereffect5 rounded-md overflow-hidden">
                        <img class="img-fluid img-responsive" src="assets/img/portfolio/img8.jpg" alt="">                           
                    </div>                     
                </div>   
            </div>
        </div>
    </section>	 

      <!-- End Clients Section -->
    </main>
   
          <!-- End Footer -->
    @endsection