@extends('layouts/Layout')

<body style="background-image: url(/img/bicycle-1839005_1280.jpg)">
    <div class="container row">
        <div class="col-md-1"></div>
        <div class="jumbotron border border-primary col-md-4 mt-6">
            <div class="mb-5">
                <h4 class="pb-5">Modification d'un magasin<small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                <form name="store-create" action="{{ !empty($store) ? url('/stores/'.$store->getStoreId().'/edit') :url('/stores/create') }}" method="POST">
                @csrf

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("store-name") ? $errors->first("store-name") : "" }}</div>
                        <input id="store-name-mag-up" name="store-name" type="text" class="form-control" placeholder="Nom" value="{{ !empty($store) ? $store->getStoreName() : "" }}">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("street") ? $errors->first("street") : "" }}</div>
                        <input id="street-mag-up" name="street" type="text" class="form-control" placeholder="Adresse" value="{{ !empty($store) ? $store->getStreet() : "" }}">
                    </div>


                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("city") ? $errors->first("city") : "" }}</div>
                        <input id="city-mag-up" name="city" type="text" class="form-control" placeholder="Ville" value="{{ !empty($store) ? $store->getCity() : "" }}">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("zip-code") ? $errors->first("zip-code") : "" }}</div>
                        <input id="zip-code-mag-up" name="zip-code" type="text" class="form-control" placeholder="Code postal" value="{{ !empty($store) ? $store->getZipCode() : "" }}">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("state") ? $errors->first("state") : "" }}</div>
                        <input id="state-mag-up" name="state" type="text" class="form-control" placeholder="Région" value="{{ !empty($store) ? $store->getState() : "" }}">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("phone") ? $errors->first("phone") : "" }}</div>
                        <input id="phone-mag-up" name="phone" type="text" class="form-control" placeholder="Téléphone" value="{{ !empty($store) ? $store->getPhone() : "" }}">
                    </div>

                    <div class="form-marque pb-2">
                        <div class="error">{{ $errors->has("email") ? $errors->first("email") : "" }}</div>
                        <input id="email-mag-up" name="email" type="text" class="form-control" placeholder="Email" value="{{ !empty($store) ? $store->getEmail() : "" }}">
                    </div>

                    <div class="form-marque pt-3">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

