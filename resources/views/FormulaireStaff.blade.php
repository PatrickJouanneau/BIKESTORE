@extends('Layout')

@section('content')

<body class="antialiased">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-5 col-md-5">
            <div class="card o-hidden rounded-sm border-0 shadow-lg my-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">

                            <div class="p-5">
                                <div class="user">
                                    <div class="text-center">
                                        <h3>Creation d'un personnel</h3>
                                    </div>

                                    <div class="card-body">
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="first_name" aria-describedby="firstNameHelp" placeholder="Prénom">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="last_name" aria-describedby="lastNameHelp" placeholder="Nom">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="phone" aria-describedby="phoneHelp" placeholder="téléphone">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirmer le mot de passe">
                                            </div>

                                            <div class="form-group">
                                                <select id="magasin" class="form-control" value="{{ old('magasin') }}" required>
                                                    <option selected>Magasin</option>
                                                    <option>Santa Cruz</option>
                                                    <option>Baldwin</option>
                                                    <option>Rowlett</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select id="manager" class="form-control" value="{{ old('profil') }}" required>
                                                    <option selected>Responsable direct</option>
                                                    <option>Vendeur</option>
                                                    <option>Administratif</option>
                                                    <option>Préparateur</option>
                                                    <option>Réparateur</option>
                                                    <option>Direction</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <p class="form-control form-control-user">
                                                    Personnel en activité &nbsp;? &nbsp;&nbsp;&nbsp;
                                                    <label class="radio-inline"><input type="radio" name="active" checked> &nbsp; Oui</label>&nbsp;&nbsp;&nbsp;
                                                    <label class="radio-inline"><input type="radio" name="active"> &nbsp; Non</label>
                                                </p>
                                            </div>

                                            <a href="index.html" class="btn btn-primary btn-user btn-block">
                                                Enregistrer
                                            </a>

                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsction