<div class="mb-5">
    <h4>CREATION d'un Nouveau client</h4>
<form name="customer-create" action="{{ url('customers/create') }}" method="POST">
    @csrf

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("first-name") ? $errors->first("first-name") : "" }}</div>
            <input id="first-name" name="first-name" type="text" class="form-control" placeholder="Prénom">
        </div>
        
    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("last-name") ? $errors->first("last-name") : "" }}</div>
        <input id="last-name" name="last-name" type="text" class="form-control" placeholder="Nom">
    </div>

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("phone") ? $errors->first("phone") : "" }}</div>
        <input id="phone" name="phone" type="text" class="form-control" placeholder="Téléphone">
    </div>

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("email") ? $errors->first("email") : "" }}</div>
        <input id="email" name="email" type="text" class="form-control" placeholder="email">
    </div>

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("street") ? $errors->first("street") : "" }}</div>
        <input id="street" name="street" type="text" class="form-control" placeholder="Adresse">
    </div>

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("zip-code") ? $errors->first("zip-code") : "" }}</div>
        <input id="zip-code" name="zip-code" type="text" class="form-control" placeholder="Code postal">
    </div>

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("city") ? $errors->first("city") : "" }}</div>
        <input id="city" name="city" type="text" class="form-control" placeholder="Ville">
    </div>

    <div class="form-marque pb-2">
        <div class="error">{{ $errors->has("state") ? $errors->first("state") : "" }}</div>
        <input id="state" name="state" type="text" class="form-control" placeholder="Région">
    </div>

    <div class="form-marque pb-5">
        <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
    </div>

</form>
</div>
<hr>
