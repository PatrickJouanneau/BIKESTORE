@extends('layouts/Layout')

<body style="background-image: url(/img/wheel-4676003_1920.jpg">
    <div class="container row">
        <div class="col-md-8"></div>
        <div class="jumbotron border border-primary col-md-4 mt-6">
            <div class="p-3">
                <h4>MODIFICATION d'un client <small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                <form name="customer" action="{{ !empty($customer) ? url('/customers/'.$customer->getCustomerId().'/edit') : url('/customers/create') }}" method="POST">
                    @csrf

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("last-name") ? $errors->first("last-name") : "" }}</div>
                        <input id="last-name-up" name="last-name" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getLastName() : "" }}">
                    </div><br>

                   <div class="form-marque">
                    <div class="error">{{ $errors->has("first-name") ? $errors->first("first-name") : "" }}</div>
                        <input id="first-name-up" name="first-name" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getFirstName() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("phone") ? $errors->first("phone") : "" }}</div>
                        <input id="phone-up" name="phone" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getPhone() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("email") ? $errors->first("email") : "" }}</div>
                        <input id="email-up" name="email" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getEmail() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("street") ? $errors->first("street") : "" }}</div>
                        <input id="street-up" name="street" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getStreet() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("zip-code") ? $errors->first("zip-code") : "" }}</div>
                        <input id="zip-code-up" name="zip-code" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getZipCode() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("city") ? $errors->first("city") : "" }}</div>
                        <input id="city-up" name="city" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getCity() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <div class="error">{{ $errors->has("state") ? $errors->first("state") : "" }}</div>
                        <input id="state-up" name="state" type="text" class="form-control" value="{{ !empty($customer) ? $customer->getState() : "" }}">
                    </div><br>

                    <div class="form-marque">
                        <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

