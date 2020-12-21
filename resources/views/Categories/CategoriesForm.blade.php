<h4>MODIFICATION d'une catégorie</h4>

<form name="category" action="" method="POST">
    @csrf
    <select name="" id="category-dropdown" class="btn btn-light btn-block">
        <option value="Tout">Choisir une categorie...</option>
        @foreach ($categories as $c)
            <option value="{{ $c->getCategoryId() }}">{{ $c->getCategoryName() }}</option>
            <option value="{{-- $b->getBrandId() --}}" {{-- $b->getBrandId() == $b->brand-dropdown , 'selected' : null --}} >{{-- $b->getBrandName() --}}</option>
        @endforeach
    </select><br>
    <div class="">
        <input type="text" class="form-control form-control-user" id="categories-update" placeholder="">
    </div>
    <br>
    <a class="btn btn-primary btn-user btn-block" href="{{-- route('') --}}">Enregistrer</a>
</form>
<br><br>

<h4>CREATION d'une nouvelle catégorie</h4>
<form name="categorie" action="">
    <div class="form-categorie">
        <input type="text" class="form-control form-control-user" id="categorie" placeholder="New categorie">
    </div>
    <br>
    <a class="btn btn-primary btn-user btn-block" href="{{-- route('') --}}">Ajouter</a>
</form>
