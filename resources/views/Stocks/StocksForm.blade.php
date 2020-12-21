<h4>SELECTION</h4>

<select name="" id="" class="btn btn-light btn-block">
    <option value="allBrands">Sélection marques</option>
</select>
<select name="" id="" class="btn btn-light btn-block">
    <option value="allCategories">Sélection par catégorie</option>
</select>
<select name="" id="" class="btn btn-light btn-block">
    <option value="allYears">Sélection par année</option>
</select>
<select name="" id="" class="btn btn-light btn-block">
    <option value="allYears">Sélection par magasin</option>
</select>
<select name="" id="" class="btn btn-light btn-block">
    <option value="allYears">Sélection par production</option>
</select>
<br><br>
<hr><br>

<h4>Nouvelle mise en stock</h4>
<form name="brand" action="">
    @csrf
    <div class="form-marque">
        <input type="text" class="form-control form-control-user" id="stockCode" placeholder="Code">
    </div><br>
    <div class="form-marque">
        <input type="text" class="form-control form-control-user" id="stockName" placeholder="Name">
    </div><br>
    <div class="form-marque">
        <input type="text" class="form-control form-control-user" id="stockQuantity" placeholder="Quantité">
    </div>
    <br>
    <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>
