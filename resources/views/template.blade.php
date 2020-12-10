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

    <div class="tab-pane fade show active" id="marque" role="tabpanel">
        <!-- MARQUE -->
        <div class="container">
            <div class="row">
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
                            @yield('liste_des_catégories')
                        </tbody>
                    </table>
                </div>
                <div class="col-xl-6">
                    <h4>SELECTION</h4>
                    <select name="" id="" class="btn btn-light btn-block">
                        <option value="Tout">Choisir une marques</option>
                    </select>
                    <br><br>
                    <hr><br>
                    <h4>CREATION d'une nouvelle marque</h4>
                    <form name="brand" action="">
                        <div class="form-marque">
                            <input type="text" class="form-control form-control-user" id="brand" placeholder="New brand">
                        </div>
                        <br>
                        <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
