<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>I GWE accueil</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href={{asset("assets/img/favicon.png")}} type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/light-box.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
			integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
			crossorigin=""/>
    <link rel="stylesheet" href={{asset("assets/css/geocoder.css")}}>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
</head>

<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('assets/img/monLogoTest.jpg') }}" alt="">
        </div>
        <ul>
            <li><a href="{{ url('/')}}"><i class="fa fa-home"></i> <em>Accueil</em></a></li>
            <li><a href="#2"><i class="fa fa-address-card"></i> <em>A propos</em></a></li>
            <li><a href="{{ route('commander.index')}}"><i class="fa fa-map-marker"></i> <em>Commander</em></a></li>
            <li><a href="{{ route('inscription.index') }}"><i class="fa fa-user-plus"></i> <em>S'inscrire</em></a></li>
            <li><a href="#4"><i class="fa fa-comment"></i> <em>Guide</em></a></li>
        </ul>
    </nav>

    <div class="slides">
        <div class="slide" id="1">
            <div class="content first-content">
                <div class="container-fluid">
                    <div class="row navigation">
                        <div class="col-md-3 vehicule">
                            <div class="author-image"><i class="fa fa-bus fa-3x"></i></div>
                        </div>
                        <div class="col-md-3 vehicule">
                            <div class="author-image"><i class="fa fa-motorcycle fa-3x"></i></div>
                        </div>
                        <div class="col-md-3 vehicule">
                            <div class="author-image"><i class="fa fa-taxi fa-3x"></i></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Déplacez-vous autrement</h2>
                            <p>I GWE met à votre disposition des véhicules comme<strong>
                                    <a rel="nofollow" href="https://www.toocss.com"> bus, moto, taxi</a></strong>
                                pour tous vos déplacements.Avec I GWE, déplacez-vous en <em>toute sécurité</em>
                                et en <em>toute confiance</em> eu utilisant nos<em> véhicules assurés.</em>
                                conduits par des chauffeurs <em> avertis, respectueux</em></p>
                            <div class="main-btn"><a href="#2">Read More</a></div>
                            <div class="fb-btn"><a rel="nofollow" href="https://fb.com/templatemo">Our FB Page</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>A propos de I GWE</h2>
                            <p><i>I GWE</i> est une entreprise de virtualisation du transport qui
                             vous permet de vous déplacer comme vous voulez,
                            confortablement et à un coût raisonnable à bord de bus,taxi, moto. </p>
                            <p>Nos moto sont assurés et ne prennent qu'un seul passager. 
                                Un casque est disponible pour le client. Les conducteurs de taxi ont tous un 
                                permis et ont été soumis à un test de psychologie.
                            Le tarif de nos motos est de 70f le kilomètre</p>
                            <p>Nos bus sont en règle ainsi que les conducteurs. Choisissez 
                                nos bus VIP climatisés à 150f le kilomètre ou des bus ordinaires à 100f le 
                                kilomètre pour vos courses.</p>
                            <p>Nos taxis sont en règle de même que les conducteurs.
                                Vous avez le choix entre les taxis VIP climatisés à 100f le kilomètre
                                ou ceux ordinaires à 75f le kilomètre.</p>
                            <div class="main-btn"><a href="#3">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/first_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number One</h2>
                                                <p>Quisque sit amet lacus in diam pretium faucibus. Cras vel justo
                                                    lorem.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/first_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/second_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Two</h2>
                                                <p>Donec eget dictum tellus. Curabitur a interdum diam. Nulla vestibulum
                                                    porttitor porta.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/second_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/third_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Three</h2>
                                                <p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/third_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/fourth_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Four</h2>
                                                <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices
                                                    ipsum.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/fourth_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/fifth_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Fifth Item</h2>
                                                <p>Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/fifth_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/sixth_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Sixth Item</h2>
                                                <p>Maecenas dapibus neque sed nisl consectetur, id semper nisi egestas.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/sixth_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/seventh_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Seven</h2>
                                                <p>Etiam aliquet, est id varius fringilla, eros libero pellentesque
                                                    lectus.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/seventh_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/eight_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Eight</h2>
                                                <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices
                                                    ipsum.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/eight_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/ninth_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Nine</h2>
                                                <p>Orci varius natoque penatibus et magnis dis parturient montes.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/ninth_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/fifth_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Number Ten</h2>
                                                <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices
                                                    ipsum.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/fifth_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/first_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Eleventh Item</h2>
                                                <p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/first_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{asset('assets/img/second_big_item.jpg')}}" data-lightbox="image-1">
                                        <div class="hover-effect">
                                            <div class="hover-content">
                                                <h2>Twelvth Item</h2>
                                                <p>Etiam tincidunt magna ex, sit amet lobortis felis bibendum id.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="image">
                                        <img src="{{asset('assets/img/second_item.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="footer">
        <div class="content">
            <p>Copyright &copy; 2020 <a href="localhost/filrouge/public">I GWE</a></p>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>
    <script src={{asset("assets/js/geocoder.js")}}></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src={{asset("assets/js/carte.js")}}></script>
    <script src="{{ asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset('
            assets / js / jquery - 3.2 .1.slim.min.js ') }}"><\/script>')

    </script>
    
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src={{ asset('assets/vendors/jquery.min.js') }}></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {



            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }

    </script>
</body>

</html>
