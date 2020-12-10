@extends('home')

@section('liste_des_produits')
        @foreach($categories as $c)
            <tr>
                <th>{{ $c->getProductsId() }}</th>
                <td>{{ $c->getProductName() }}</td>
                <td>{{ $c->getBrandName() }}</td>
                <td>{{ $c->getCategoriesName() }}</td>
                <td>{{ $c->getmodelYear() }}</td>
                <td>{{ $c->getListPrice() }}</td>
            </tr>
        @endforeach
    </tr>
@stop
