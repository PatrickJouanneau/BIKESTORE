<div class="mb-5">
    <h4>Création d'un utilisateur</h4>

<form class="staff-create" action="{{ url('staffs/create') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="error">{{ $errors->has("first-name-stf") ? $errors->first("first-name-stf") : "" }}</div>
        <input id="first-name-stf" name="first-name-stf" type="text" class="form-control form-control-user"  placeholder="Prénom">
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("last-name-stf") ? $errors->first("last-name-stf") : "" }}</div>
        <input id="last-name-stf" name="last-name-stf" type="text" class="form-control form-control-user" placeholder="Nom">
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("email-stf") ? $errors->first("email-stf") : "" }}</div>
        <input id="email-stf" name="email-stf" type="email" class="form-control form-control-user"  placeholder="email">
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("phone-stf") ? $errors->first("phone-stf") : "" }}</div>
        <input id="phone-stf" name="phone-stf" type="text" class="form-control form-control-user"  placeholder="téléphone">
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("store-stf") ? $errors->first("store-stf") : "" }}</div>
        <select id="store-stf" name="store-stf" class="form-control" value="{{ old('magasin') }}" required>
            <option>Affecter un magasin...</option>
        @foreach ($stores as $store)
            <option value="{{ $store->getStoreId() }}">{{ $store->getStoreName() }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("manager-stf") ? $errors->first("manager-stf") : "" }}</div>
        <select id="manager-stf" name="manager-stf" class="form-control" value="{{ old('manager') }}" required>
            <option>Responsable...</option>
        @foreach ($staffs as $staff)
            <option value="{{ $staff->getManagerId() }}">{{ $staff->getFirstName() }} {{ $staff->getLastName() }}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("profil-stf") ? $errors->first("profil-stf") : "" }}</div>
        <select id="profil-stf" name="profil-stf" class="form-control" value="{{ old('profil') }}" required>
            <option selected>Profil du poste</option>
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
            <label class="radio-inline"><input type="radio" name="active"  value="oui"> &nbsp; Oui</label>&nbsp;&nbsp;&nbsp;
            <label class="radio-inline"><input type="radio" name="active" checked value="non"> &nbsp; Non</label>
        </p>
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("password") ? $errors->first("password") : "" }}</div>
        <input id="password" name="password" type="password" class="form-control form-control-user"   placeholder="Mot de passe">
    </div>

    <div class="form-group">
        <div class="error">{{ $errors->has("password-bis") ? $errors->first("password-bis") : "" }}</div>
        <input id="password-bis" name="password-bis" type="password" class="form-control form-control-user"   placeholder="Confirmer le mot de passe">
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
</form>
</div>
