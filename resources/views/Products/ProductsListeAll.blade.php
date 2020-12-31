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
            <th scope="col">@</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $prod)
            <tr>
                <th>{{ $prod->getProductId() }}</th>
                <td>{{ $prod->getProductName() }}</td>
                <td>{{ $prod->getModelYear() }}</td>
                <td>{{ $prod->getProductBrand()->getBrandName() }}</td>
                <td>{{ $prod->getProductCategory()->getCategoryName() }}</td>
                <td>{{ $prod->getListPrice() }}</td>
                <td>
                    <a href="{{ url('/home/'.$prod->getProductId().'/edit') }}"><img src="img/wrench.svg" alt=""></a>&nbsp;&nbsp;
                    <a href="{{ url('/home/'.$prod->getProductId().'/delete') }}"><img src="img/trash.svg" alt="Poubelle"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
