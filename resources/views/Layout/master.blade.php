<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--Carga de archivos css -->
        <link href="{{url ('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="https://st2.depositphotos.com/3027583/7405/v/600/depositphotos_74056923-stock-illustration-car-parking-flat-icon-sign.jpg"/> 
        <title>Parqueadero CAPSHI</title>
    </head>
    
    <body>
        
        @include('navegation.navbar')

        <div class="container">
            @yield('content')
        </div>
        
        <!--Carga de archivos javacript -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <scrip type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></scrips>
    </body>
</html>
