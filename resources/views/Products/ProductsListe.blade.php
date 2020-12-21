<h4>Liste des produits</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Millesime</th>
            <th scope="col">Marque</th>
            <th scope="col">Catégorie</th>
            <th scope="col">Prix €</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
            <tr>
                <th>{{ $p->getProductId() }}</th>
                <td>{{ $p->getProductName() }}</td>
                <td>{{ $p->getModelYear() }}</td>
                <td>{{ $p->getProductBrand()->getBrandName() }}</td>
                <td>{{ $p->getProductCategory()->getCategoryName() }}</td>
                <td>{{ $p->getListPrice() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
