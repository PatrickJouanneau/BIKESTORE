<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" deffer></script>

    <title>Bike Store</title>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @yield('contenu')
            </div>

            <div class="col-xl-6">
                <h4>Liste des marques</h4>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                        </tr>
                    </thead>
                    <tbody>
                        @yield('liste_des_marques')
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
