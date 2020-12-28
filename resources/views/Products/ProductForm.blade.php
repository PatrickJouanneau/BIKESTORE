<hr>
<h4>CREATION d'un nouveau produit</h4>

<form name="product-create" action="{{ url('products/create')  }}" method="POST" class="mb-5">
@csrf
    <div class="mb-2">
        <div class="error">{{ $errors->has("product-name") ? $errors->first("product-name") : "" }}</div>
        <input id="product-name" name="product-name" type="text" class="form-control form-control-user"  placeholder="Nom du produit">
    </div>

    <select name="product-select-brand" id="product-select-brand" class="form-control form-control-user mb-2">
        <option value="Tout">Choisir une marque...</option>
        @foreach ($brands as $b)
            <option value="{{ $b->getBrandId() }}">{{ $b->getBrandName() }}</option>
        @endforeach
    </select><br>

    <select name="product-select-category" id="product-select-category" class="form-control form-control-user mb-2">
        <option value="allCategories">Choisir une catégorie</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->getCategoryId() }}">{{ $cat->getCategoryName() }}</option>
            @endforeach
    </select>

    <select name="product-select-year" id="product-select-year" class="form-control form-control-user mb-2">
        <option value="allYears">Choisir une année</option>
        <option value="year">2016</option>
        <option value="year">2017</option>
        <option value="year">2018</option>
        <option value="year">2019</option>
        <option value="year">2020</option>
        <option value="year">2021</option>
        <option value="year">2022</option>
        <option value="year">2023</option>
    </select>

    <div class="pb-2">
        <div class="error">{{ $errors->has("product-price") ? $errors->first("product-price") : "" }}</div>
        <input id="product-price" name="product-price" type="text" class="form-control form-control-user"  placeholder="Prix">
    </div>

    <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>
