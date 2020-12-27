<h4>Création d'un utilisateur</h4>

<form class="user" method="POST" action="{{-- route('register') --}}">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control form-control-user"  placeholder="Prénom">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" placeholder="Nom">
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user"  placeholder="email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user"  placeholder="téléphone">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"   placeholder="Mot de passe">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"   placeholder="Confirmer le mot de passe">
    </div>
    <div class="form-group">
        <select id="magasin" class="form-control" value="{{ old('magasin') }}" required>
            <option value="Tout">Affecter un magasin...</option>
        @foreach ($stores as $store)
            <option value="{{ $store->getStoreId() }}">{{ $store->getStoreName() }}</option>
        @endforeach
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
            Activité &nbsp;? &nbsp;&nbsp;&nbsp;
            <label class="radio-inline"><input type="radio" name="active" checked> &nbsp; Oui</label>&nbsp;&nbsp;&nbsp;
            <label class="radio-inline"><input type="radio" name="active"> &nbsp; Non</label>
        </p>
    </div>
    <a href="index.html" class="btn btn-primary btn-user btn-block">
        Enregistrer
    </a>
</form>
