<h4>Liste des stocks</h4>

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
    <tbody>
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
