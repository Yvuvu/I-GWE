<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>I GWE Inscription</title>

    <!-- load CSS -->   
    <link rel="stylesheet" href={{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/vendors/font-awesome/css/fontawesome-all.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('assets/vendors/slick/slick.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('assets/vendors/slick/slick-theme.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/tooplate-style.css') }}>

    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS &&
                    window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode
                .removeChild(t), e
        };
        supportsCssVars() || alert(
            "Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");

    </script>

</head>

<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @else
            <div class="alert alert-warning" role="alert">
                {{session('Erreur')}}
            </div> 
    @endif    
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">I GWE</h1>
                            <img src={{ asset('assets/img/underline.png') }} class="img-fluid mb-4">
                            <p class="phrase">Choisissez un profile et inscrivez-vous </p>
                            <b><a href="{{ url('/') }}">Menu principal</a></b>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fa fa-user fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Propriétaire de véhicule</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Vous vous inscrivez comme propriétaire
                                                            de véhicule!</h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Pour qu'un'véhicule soit I GWE, le propriétaire du véhicule doit
                                                            s'enregistrer avant de déclarer son véhicule en l'enregistrant.
                                                            Le conducteur s'inscrira ensuite afin de répondre aux
                                                            commandes.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="{{route('proprietaire.store')}}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Nom</label>
                                                                    <input type="text"
                                                                        name="nom" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Prénom</label>
                                                                    <input type="text"
                                                                        name="prenom" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Téléphone</label>
                                                                    <input type="tel"
                                                                        name="telephone" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Pièce d'identité</label>
                                                                    <input type="text" 
                                                                        name="numpiece" class="form-control"
                                                                        placeholder="Entrer le numéro" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Email</label>
                                                                    <input type="email" 
                                                                        name="email" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Adresse</label>
                                                                    <input type="text" 
                                                                        name="adresse" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>                                                            
                                                            <button type="submit"
                                                                class="btn btn-primary tm-btn-submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <div class="d-flex">
                                            <i class="fa fa-taxi tm-nav-icon"></i>
                                            <i class="fa fa-motorcycle tm-nav-icon"></i>
                                            <i class="fa fa-bus tm-nav-icon"></i>
                                        </div>
                                            <span class="tm-nav-text">Enregistrer un véhicule</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Faites de votre véhicule un véhicule I GWE
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Vous avez déjà un compte propriétaire?Enregistrez votre véhicule.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="{{route('vehicule.store')}}" method="post" class="contact-form">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Identité du propriétaire</label>                                                        
                                                                        <input type="text" 
                                                                        name="proprietaire_id" class="form-control" placeholder="nom et prénom" required />                                                                        
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Type de véhicule</label>                                                                   
                                                                    <select name="categorie_id" pattern="[^\s]" class="form-control" required>
                                                                        <option selected ></option>
                                                                        @foreach($categorie as $cat)
                                                                            <option value="{{$cat->id}}">{{$cat->categorie}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">                                                         
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Immatriculation</label>
                                                                    <input type="text" 
                                                                        name="immatriculation" class="form-control"
                                                                        placeholder="Saisir le numéro de la plaque d'immatriculation" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Carte grise</label>
                                                                    <input type="text" 
                                                                        name="cartegrise" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Marque</label>
                                                                    <input type="text" 
                                                                        name="marque" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Couleur</label>
                                                                    <input type="text" id="contact_email"
                                                                        name="couleur" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>                                                                                                                    
                                                            <button type="submit"
                                                                class="btn btn-primary tm-btn-submit">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fa fa-car fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Conducteur</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Vous vous inscrivez en tant que
                                                            conducteur!</h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Pour être conducteur I GWE, le propriétaire                                                         
                                                            doit d'abord être enregistré pour déclarer son
                                                            véhicule.
                                                            Le conducteur s'inscrit ensuite pour le mettre en circulation
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="{{ route('conducteur.store')}}" enctype="multipart/form-data" method="post" class="contact-form">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Immatriculation du véhicule</label>
                                                                    <input type="text"
                                                                        name="vehicule_id" class="form-control"
                                                                        placeholder="Saisir le numéro d'immatriculation" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Code du propriétaire</label>
                                                                    <input type="text" 
                                                                        name="proprietaire_id" value="" class="form-control"
                                                                        placeholder="Code client reçu par mail par le propriétaire" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Nom</label>
                                                                    <input type="text" name="nom"
                                                                        class="form-control" placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Prénom</label>
                                                                    <input type="text"
                                                                        name="prenom" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Téléphone</label>
                                                                    <input type="tel" id="contact_name"
                                                                        name="telephone" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Numéro de pièce</label>
                                                                    <input type="text" 
                                                                        name="numpiece" class="form-control"
                                                                        placeholder="Numéro de votre carte d'identité" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Email</label>
                                                                    <input type="email"
                                                                        name="email" class="form-control"
                                                                        placeholder="Votre adresse email" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Adresse</label>
                                                                    <input type="text"
                                                                        name="adresse" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Photo d'identité</label>
                                                                    <input type="file" 
                                                                        name="photo" class="form-control"
                                                                        placeholder="" required />
                                                                </div>                                                                
                                                            </div>                                                          
                                                            <button type="submit"
                                                                class="btn btn-primary tm-btn-submit">Enregistrer</button>
                                                                <button type="reset"
                                                                class="btn btn-danger btn-btn-submit">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fa fa-user fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Passager</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Vous vous inscrivez comme passager!
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-12">
                                                        <p>Pour commander des courses, vous devez vous inscrire.
                                                            Les informations de votre compte vous seront transmises
                                                            illico pour authentification.
                                                            Vous pourrez ensuite commander une course</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form action="{{route('passager.store')}}" method="POST">
                                                            @csrf
                                                            <div class="row">                                                    
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Nom</label>
                                                                    <input type="text" name="nom"
                                                                        class="form-control" placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Prénom</label>
                                                                    <input type="text"
                                                                        name="prenom" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Téléphone</label>
                                                                    <input type="tel" 
                                                                        name="telephone" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Numéro de pièce</label>
                                                                    <input type="text" 
                                                                        name="numpiece" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>                                                                                                                      
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                                                    <label>Email</label>
                                                                    <input type="email"
                                                                        name="email" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                                <div
                                                                    class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                                                    <label>Adresse</label>
                                                                    <input type="text"
                                                                        name="adresse" class="form-control"
                                                                        placeholder="" required />
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary tm-btn-submit">Envoyer</button>
                                                            <button type="reset"
                                                            class="btn btn-danger tm-btn-submit">Annuler</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fa fa-book fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Guide d'utilisation</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Suivez ces étapes pour bénéficier de
                                                            nos services</h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                                <a href="#" class="tm-slider-img-link"><img
                                                                        src={{ asset('assets/img/gallery-img-01-tn.jpg') }}
                                                                        alt="Image 1"
                                                                        class="img-fluid tm-slider-img"></a>
                                                                <a href="#" class="tm-slider-img-link"><img
                                                                        src={{ asset('assets/img/gallery-img-02-tn.jpg') }}
                                                                        alt="Image 2"
                                                                        class="img-fluid tm-slider-img"></a>
                                                                <a href="#" class="tm-slider-img-link"><img
                                                                        src={{ asset('assets/img/gallery-img-03-tn.jpg') }}
                                                                        alt="Image 3"
                                                                        class="img-fluid tm-slider-img"></a>
                                                                <a href="#" class="tm-slider-img-link"><img
                                                                        src={{ asset('assets/img/gallery-img-04-tn.jpg') }}
                                                                        alt="Image 4"
                                                                        class="img-fluid tm-slider-img"></a>
                                                                <a href="#" class="tm-slider-img-link"><img
                                                                        src={{ asset('assets/img/gallery-img-05-tn.jpg') }}
                                                                        alt="Image 5"
                                                                        class="img-fluid tm-slider-img"></a>
                                                                <a href="#" class="tm-slider-img-link"><img
                                                                        src={{ asset('assets/img/gallery-img-06-tn.jpg') }}
                                                                        alt="Image 6"
                                                                        class="img-fluid tm-slider-img"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p class="small tm-copyright-text">I GWE &copy; <span>Tous droits réservés</span>
            </footer>
        </div>
    </div>
    <!-- load JS -->
    <script src={{ asset('assets/js/jquery-3.2.1.slim.min.js') }}></script>
    <script src={{ asset('assets/vendors/slick/slick.min.js') }}></script>
    <script src={{ asset('assets/js/anime.min.js') }}></script>
    <script src={{ asset('assets/js/main.js') }}></script>
    <script>
        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if ($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            } else {
                main.removeClass('tm-footer-relative');
            }
        }

        /* DOM 
        ------------------------------------------------*/
        $(function() {

            setupFooter();

            $(window).resize(function() {
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());           
        });

    </script>

</body>

</html>
