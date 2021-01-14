<h4>Liste des stocks</h4>
<a id="all-stocks" class="btn btn-outline-primary float-right mr-5 mb-4 pr-4">Voir tous les enregistrements</a>
<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Stocks</th>
            <th scope="col">Magasin</th>
            <th scope="col">Année</th>
            <th scope="col">Prix €</th>
        </tr>
    </thead>
    <tbody id="body-stock">

        @foreach($stocks as $stock)
            <tr>
                <th>{{ $stock->getProdProduct()->getProductId() }}</th>
                <td>{{ $stock->getProdProduct()->getProductName() }}</td>
                <td>{{ $stock->getQuantity() }}</td>
                <td>{{ $stock->getSalesStore()->getStoreName() }}</td>
                <td>{{ $stock->getProdProduct()->getModelYear() }}</td>
                <td>{{ $stock->getProdProduct()->getListPrice() }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
