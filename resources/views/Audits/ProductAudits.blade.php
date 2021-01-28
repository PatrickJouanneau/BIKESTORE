<h4>Suivi des produits enregistrés</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id prod</th>
            <th scope="col">Nom</th>
            <th scope="col">Id marque</th>
            <th scope="col">Id cat</th>
            <th scope="col">Année</th>
            <th scope="col">Prix</th>
            <th scope="col">date</th>
            <th scope="col">Opération</th>
        </tr>
    </thead>
    <tbody id="productAudit">
        @foreach($allProductAudits as $prod)
            <tr>
                <th>{{ $prod->getChangeId() }}</th>
                <td>{{ $prod->getProductId() }}</td>
                <td>{{ $prod->getProductName() }}</td>
                <td>{{ $prod->getBrandId() }}</td>
                <td>{{ $prod->getCategoryId() }}</td>
                <td>{{ $prod->getModelYear() }}</td>
                <td>{{ $prod->getListPrice() }}</td>
                <td>{{ $prod->getUpdated() }}</td>
                <td>{{ $prod->getOperation() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
