
<h4>MODIFICATION d'une marque</h4>

<form name="brand" action="" method="POST">
    @csrf
    <select name="select-by-name" id="brand-dropdown" class="btn btn-light btn-block">
        <option value="Tout">Choisir une marque...</option>
        @foreach ($brands as $b)
            <option value="{{ $b->getBrandId() }}">{{ $b->getBrandName() }}</option>
            <option value="{{-- $b->getBrandId() --}}" {{-- $b->getBrandId() == $b->brand-dropdown , 'selected' : null --}} >{{-- $b->getBrandName() --}}</option>
        @endforeach
    </select><br>
    <div class="form-marque">
        <input type="text" class="form-control form-control-user" id="brand-update" placeholder="">
    </div>
    <br>
    <a class="btn btn-primary btn-user btn-block" href="{{-- route('') --}}">Enregistrer</a>

</form>
<br><br>
<hr><br>

<h4>CREATION d'une nouvelle marque</h4>
<form name="brand" action="{{-- route('') --}}" method="POST">
    @csrf
    <div class="form-marque">
        <input type="text" class="form-control form-control-user" name="rand-creat" id="brand-creat" placeholder="Nouvelle marque">
    </div>
    <br>
    <a class="btn btn-primary btn-user btn-block" type="submit">Ajouter</a>
</form>





