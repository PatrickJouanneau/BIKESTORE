<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" deffer></script>

    <script deffer>
         @yield('scripts')
    </script>
    <script src="{{ asset('js/custom.js') }}" deffer></script>
    <script src="{{ asset('js/brands.js') }}" deffer></script>
    <script src="{{ asset('js/ProductAutocomplete.js') }}" deffer></script>>
    <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.7/dist/latest/bootstrap-autocomplete.min.js"></script>
    <!--<script src="{{-- asset('js/demo/chart-area-demo.js') --}}" deffer></script>-->
    <!--<script src="{{-- asset('js/demo/chart-bar-demo.js') --}}" deffer></script>-->
    <!--<script src="{{-- asset('js/demo/chart-pie-demo.js') --}}" deffer></script>-->
    <!--<script src="{{-- asset('js/demo/datables-demo.js') --}}" deffer></script>-->


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
