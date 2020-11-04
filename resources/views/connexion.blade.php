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
        <link rel="shortcut icon" href={{asset("assets/img/favicon.ico")}} type="image/x-icon">
        <link rel="stylesheet" type="text/css" href={{asset("assets/css/monstyle.css")}}>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <h1>Welcome</h1>
                <form class="form">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <button type="submit" id="login-button">Login</button>
                </form>
            </div>            
            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
        {{-- <script src="{{asset('assets/js/formulaire.js')}}"></script>     --}}
        <script>
            $("#login-button").click(function(event){
                event.preventDefault();
            
                $('form').fadeOut(500);
                $('.wrapper').addClass('form-success');
            });
        </script>
    </body>

</html>