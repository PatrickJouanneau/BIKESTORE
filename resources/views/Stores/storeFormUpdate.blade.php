@extends('layouts/Layout')

<body class="background-image: url(/img/bicycle-1839005_1280.jpg)">
    <div class="container row">
        <div class="col-md4"></div>
        <div class="jumbotron border border-primary col-md-4 mt-6">
            <div class="mb-5">
                <h4>Nouveau magasin</h4>
                <form name="store-create" method="POST" action="{{ url('stores/create') }}">
                @csrf

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("store-name") ? $errors->first("store-name") : "" }}</div>
                        <input id="store-name-mag-up" name="store-name" type="text" class="form-control" placeholder="Nom">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("street") ? $errors->first("street") : "" }}</div>
                        <input id="street-mag-up" name="street" type="text" class="form-control" placeholder="Adresse">
                    </div>


                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("city") ? $errors->first("city") : "" }}</div>
                        <input id="city-mag-up" name="city" type="text" class="form-control" placeholder="Ville">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("zip-code") ? $errors->first("zip-code") : "" }}</div>
                        <input id="zip-code-mag-up" name="zip-code" type="text" class="form-control" placeholder="Code postal">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("state") ? $errors->first("state") : "" }}</div>
                        <input id="state-mag-up" name="state" type="text" class="form-control" placeholder="Région">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("phone") ? $errors->first("phone") : "" }}</div>
                        <input id="phone-mag-up" name="phone" type="text" class="form-control" placeholder="Téléphone">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("email") ? $errors->first("email") : "" }}</div>
                        <input id="email-mag-up" name="email" type="text" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-marque pt-3">
                        <a class="btn btn-primary btn-user btn-block">Ajouter</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

