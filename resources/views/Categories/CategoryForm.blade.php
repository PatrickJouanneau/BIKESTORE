
<div class="mb-5">
    <h4>CREATION d'une catégorie</h4>

<form name="categorie-create" action="{{ url('categories/create')  }}" method="POST">
    @csrf
    <div class="form-categorie">
        <div class="error">{{ $errors->has("categorie") ? $errors->first("categorie") : "" }}</div>

        <input id="categorie" name="categorie" type="text" class="form-control form-control-user" placeholder="Nouvelle categorie">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
</form>
</div>

