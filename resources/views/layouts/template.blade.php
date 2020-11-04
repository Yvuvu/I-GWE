<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    {{-- @yield('titre') --}}
    <title>I GWE accueil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/light-box.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-main.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="{{ asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body>
    {{-- @yield('navigation') --}}
    <nav>
        <div class="logo">
            <img src="{{ asset('assets/img/monigwe.png') }}" alt="logo i gwe">
        </div>
        <ul>
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <em>Accueil</em></a></li>
            <li><a href="#2"><i class="fa fa-address-card"></i> <em>A propos</em></a></li>
            <li><a href="#5"><i class="fa fa-map-marker"></i> <em>Commander</em></a></li>
            <li><a href="{{ url('inscription') }}"><i class="fa fa-user-plus"></i> <em>S'inscrire</em></a></li>
            <li><a href="#4"><i class="fa fa-comment"></i> <em>Guide</em></a></li>
        </ul>
    </nav>
    <div class="slides">
        <div class="slide">
            <div class="content first-content">
                @yield('contenu')
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="content design">
            <b><p>Copyright &copy; 2020 <a href="{{url ('/')}}">I GWE</a></p></b>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset('
            assets / js / jquery - 3.2 .1.slim.min.js ') }}"><\/script>')

    </script>
    <script src={{ asset('assets/vendors/jquery.min.js') }}></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

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
