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
        @foreach($stocks as $s)
            <tr>
                <th>{{ $s->getProdProduct()->getProductId() }}</th>
                <td>{{ $s->getProdProduct()->getProductName() }}</td>
                <td>{{ $s->getQuantity() }}</td>
                <td>{{ $s->getSalesStore()->getStoreName() }}</td>
                <td>{{ $s->getProdProduct()->getModelYear() }}</td>
                <td>{{ $s->getProdProduct()->getListPrice() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
