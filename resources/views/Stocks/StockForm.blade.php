<div class="mb-5">

<h4>Nouvelle mise en stock</h4>

<form name="form-stock" action="{{ url('stocks/create') }}" method="POST" class="mb-5">
    @csrf

    <div class="mb-2 formSearch ">
        <input type="text" id="stock-productId" name="stock-productId" placeholder="Désignation" class="form-control form-control-user" />
        <div id="suggesstion-product"></div>
    </div>

    <select id="stock-storeId" name="stock-storeId" class="mb-2 form-control form-control-user">
        <option value="allBrands">Choisir un magasin</option>
        @foreach ($stores as $mag)
            <option value="{{ $mag->getStoreId() }}">{{ $mag->getStoreName() }}</option>
        @endforeach
    </select>

    <div class="mb-2">
        <input id="stock-quantity" name="stock-quantity" type="text" class="form-control form-control-user" placeholder="Quantité à entrer">
    </div>

    <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>
</div>
