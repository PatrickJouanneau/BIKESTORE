<h4>MODIFICATION d'une catégorie <small> : </small><img src="img/wrench.svg" alt="Clé"></h4>

<form name="categorieUp" action="{{ !empty($category) ? url('/categories/'.$category->getCategoryId().'/edit') : url('/categories/create') }}" method="GET">
    @csrf
    <div class="form-categorie">
        <div class="error">{{ $errors->has("categorieUp") ? $errors->first("categorieUp") : "" }}</div>
        <input type="text" class="form-control form-control-user" name="categorieUp" id="categorieUp" placeholder=" " value="{{ !empty($category) ? $category->getCategoryName()  : "" }}">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>
<br><br><hr>


<h4>CREATION d'une catégorie</h4>
<form name="categorie-create" action="{{ url('categories/create')  }}" method="POST">
    @csrf
    <div class="form-categorie">
        <div class="error">{{ $errors->has("categorie") ? $errors->first("categorie") : "" }}</div>
        <input type="text" class="form-control form-control-user" name="categorie" id="categorie" placeholder="New categorie">
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-user btn-block">Ajouter</button>
</form>

