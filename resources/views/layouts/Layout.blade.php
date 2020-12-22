<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('img') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" deffer></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}" deffer></script>
    <script src="{{ asset('js/demo/chart-bar-demo.js') }}" deffer></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}" deffer></script>
    <script src="{{ asset('js/demo/datables-demo.js') }}" deffer></script>


    <title>Bike Store</title>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

</head>

<body>

    @section('sidebar')
    <!--Voici l'encadré principal.-->
    @show


    <div class="container">
        @yield('content')
    </div>


</body>

</html>
