<div class="mb-5">

<h4>Nouvelle mise en stock</h4>

<form name="form-stock" action="{{ url('stocks/create')  }}" method="POST" class="mb-5">
    @csrf

    <div class="mb-2">
        <input id="stock-code" name="stock-code" type="text" class="form-control form-control-user" placeholder="Saisir référence">
    </div>

    <div class="mb-2">

        <div id="stock-name" name="stock-name" type="text" class="form-control form-control-user">
            <p >Retour de la référece saisie : </p>
        </div>

    </div>

    <div class="mb-2">
        <input id="stock-quantity" name="stock-quantity" type="text" class="form-control form-control-user" placeholder="Quantité à entrer">
    </div>

    <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
</form>
</div>
