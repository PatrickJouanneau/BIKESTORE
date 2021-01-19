<div class="mb-5">


<h4>Mise stock</h4>


<form name="form-stock" action="{{ url('stocks/create') }}" method="POST" class="mb-5">
    @csrf

    <div class="autocomplete mb-2">
        <input id="valProd" type="text" placeholder="Name" class="form-control test" value="{{ isset($stock) ? ($stock->getProdProduct() ? $stock->getProdProduct()->getProductName() : '') :'' }}">
        <input id="idProd" type="hidden" name="stock-productId">
    </div>

    <select id="stock-storeId" name="stock-storeId" class="mb-2 form-control form-control-user">
        <option value="allBrands">Choisir un magasin</option>
        @foreach ($stores as $mag)
            <option value="{{ $mag->getStoreId() }}" {{ isset($stock) ? ($mag->getStoreId() == $stock->getSalesStore()->getStoreId() ? "selected" :"") :"" }}>{{ $mag->getStoreName() }}</option>
        @endforeach
    </select>

    <div class="mb-2">
        <input id="stock-quantity" name="stock-quantity" type="text" class="form-control form-control-user" placeholder="Quantité à entrer" value="{{  isset($stock) ? $stock->getQuantity() : ""  }}">
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>
</div>

<script src="/js/autocomplete.js"></script>
