@extends('layouts/Layout')

<body style="background-image: url(/img/couple-5709651_1920.jpg">
    <div class="container row">
        <div class="col-md-4"></div>
            <div class="jumbotron border border-primary col-md-5 mt-6">
                <div class="p-3">
                    <h4 class="pb-5" >MODIFICATION d'un utilisateur <small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                    <form class="staff-create" action="{{ !empty($staff) ? url('/staffs/'.$staff->getStaffId().'/edit') :url('staffs/create') }}" method="POST">>
                        @csrf
                        <div class="form-group">
                            <div class="error">{{ $errors->has("first-name-stf") ? $errors->first("first-name-stf") : "" }}</div>
                            <input id="first-name-stf-up" name="first-name-stf" type="text" class="form-control form-control-user"  value="{{ !empty($staff) ? $staff->getFirstName()  : "" }}">
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("last-name-stf") ? $errors->first("last-name-stf") : "" }}</div>
                            <input id="last-name-stf-up" name="last-name-stf" type="text" class="form-control form-control-user" value="{{ !empty($staff) ? $staff->getLastName()  : "" }}">
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("email-stf") ? $errors->first("email-stf") : "" }}</div>
                            <input id="email-stf-up" name="email-stf" type="email" class="form-control form-control-user"  value="{{ !empty($staff) ? $staff->getEmail()  : "" }}">
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("phone-stf") ? $errors->first("phone-stf") : "" }}</div>
                            <input id="phone-stf-up" name="phone-stf" type="text" class="form-control form-control-user"  value="{{ !empty($staff) ? $staff->getPhone()  : "" }}">
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("store-stf") ? $errors->first("store-stf") : "" }}</div>

                            <select id="store-stf-up" name="store-stf" class="form-control" required>
                                <option>Magasin</option></option>

                            @foreach ($stores as $store)

                                <option value="{{ $store->getStoreId() }}" {{ !empty($sales->getSalesStores()   ->getStoreId()) && $sales->getSalesStores()->getStoreId() ==  $store->getStoreId   () ? "selected" : "" }}>{{ $store->getstoreName() }}</option>

                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("manager-stf") ? $errors->first("manager-stf") : "" }}</div>
                            <select id="manager-stf-up" name="manager-stf" class="form-control" value="{{ old('manager') }}" required>

                                <option>value="{{ !empty($staff->getManagerId()) ? $staff->getFirstName()  : "" }}"></option>

                            @foreach ($staffs as $staff)
                                <option value="{{ $staff->getManagerId() }}">{{ $staff->getFirstName() }} {{ $staff->getLastName() }}</option>
                            @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("profil-stf") ? $errors->first("profil-stf") : "" }}</div>
                            <select id="profil-stf-up" name="profil-stf" class="form-control" value="{{ old('profil') }}" required>
                                <option selected>value="{{ !empty($staff) ? $staff->getProfil()  : "" }}"></option>
                                <option value="vendeur">Vendeur</option>
                                <option value="administratif">Administratif</option>
                                <option value="preparateur">Préparateur</option>
                                <option value="reparateur">Réparateur</option>
                                <option value="direction">Direction</option>
                                <option value="Intérimaire">Autres</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <p class="form-control form-control-user">
                                Activité &nbsp;? &nbsp;&nbsp;&nbsp;
                                <label class="radio-inline"><input type="radio" name="active" > &nbsp; Oui</label>&nbsp;&nbsp;&nbsp;
                                <label class="radio-inline"><input type="radio" name="active"> &nbsp; Non</label>
                            </p>
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("password") ? $errors->first("password") : "" }}</div>
                            <input id="password-up" name="password" type="password" class="form-control form-control-user"   placeholder="Mot de passe">
                        </div>

                        <div class="form-group">
                            <div class="error">{{ $errors->has("passwordBis") ? $errors->first("passwordBis") : "" }}</div>
                            <input id="passwordBis-up" name="passwordBis" type="password" class="form-control form-control-user"   placeholder="Confirmer le mot de passe">
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
                    </form>

                </div>
            </div>
    </div>

</body>
