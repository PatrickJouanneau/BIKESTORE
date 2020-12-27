
<h4>CREATION d'une nouvelle marque</h4>

<form name="brand-create" action="{{ url('brands/create') }}" method="POST">
    @csrf
    <div class="form-marque">
        <div class="error">{{ $errors->has("brand") ? $errors->first("brand") : "" }}</div>
        <input id="brand" name="brand" type="text" class="form-control form-control-user" placeholder="Nouvelle marque">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
</form>





