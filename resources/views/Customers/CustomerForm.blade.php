<h4>Nouveau client</h4>
<form name="customer-create" action="{{ url('brands/create') }}" method="POST">
    @csrf

    <div class="form-marque">
        <div class="error">{{ $errors->has("last-name") ? $errors->first("last-name") : "" }}</div>
        <input id="last-name" name="last-name" type="text" class="form-control" placeholder="{{ __('Prénom') }}">
    </div><br>

   <div class="form-marque">
    <div class="error">{{ $errors->has("first-name") ? $errors->first("first-name") : "" }}</div>
        <input id="first-name" name="first-name" type="text" class="form-control" placeholder="{{ __('Nom') }}">
    </div><br>

    <div class="form-marque">
        <div class="error">{{ $errors->has("phone") ? $errors->first("phone") : "" }}</div>
        <input id="phone" name="phone" type="text" class="form-control" placeholder="{{ __('Téléphone') }}">
    </div><br>

    <div class="form-marque">
        <div class="error">{{ $errors->has("email") ? $errors->first("email") : "" }}</div>
        <input id="email" name="email" type="text" class="form-control" placeholder="{{ __('email') }}">
    </div><br>

    <div class="form-marque">
        <div class="error">{{ $errors->has("street") ? $errors->first("street") : "" }}</div>
        <input id="street" name="street" type="text" class="form-control" placeholder="{{ __('Adresse') }}">
    </div><br>

    <div class="form-marque">
        <div class="error">{{ $errors->has("zip-code") ? $errors->first("zip-code") : "" }}</div>
        <input id="zip-code" name="zip-code" type="text" class="form-control" placeholder="{{ __('Code postal') }}">
    </div><br>

    <div class="form-marque">
        <div class="error">{{ $errors->has("city") ? $errors->first("city") : "" }}</div>
        <input id="city" name="city" type="text" class="form-control" placeholder="{{ __('Ville') }}">
    </div><br>

    <div class="form-marque">
        <div class="error">{{ $errors->has("state") ? $errors->first("state") : "" }}</div>
        <input id="state" name="state" type="text" class="form-control" placeholder="{{ __('Région') }}">
    </div><br>

    <div class="form-marque">
        <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
    </div>

</form>
