@extends('homeTemplate')

@section('liste_des_marques')
        @foreach($brands as $b)
            <tr>
                <th>{{ $b->getBrandId() }}</th>
                <td>{{ $b->getBrandName() }}</td>
            </tr>
        @endforeach
    </tr>
@stop

@section('liste_des_categories')
        @foreach($categories as $c)
            <tr>
                <th>{{ $c->getCategoryId() }}</th>
                <td>{{ $c->getCategoryName() }}</td>
            </tr>
        @endforeach
    </tr>
@stop

@section('liste_des_produits')
        @foreach($products as $p)
            <tr>
                <th>{{ $p->getProductId() }}</th>
                <td>{{ $p->getProductName() }}</td>
                <td>{{ $p->getModelYear() }}</td>
                <td>{{-- $p->getProductBrand()->getBrandName() --}}</td>
                <td>{{ $p->getProductCategory()->getCategoryName() }}</td>
                <td>{{ $p->getListPrice() }}</td>
            </tr>
        @endforeach
    </tr>
@stop


@section('liste_des_stocks')
        @foreach($stocks as $s)
            <tr>
                <th>{{ $s->getProdProduct()->getProductId() }}</th>
                <td>{{ $s->getProdProduct()->getProductName() }}</td>
                <td>{{ $s->getQuantity() }}</td>
                <td>{{-- $s->getSalesname() --}}</td>
                <td>{{ $s->getProdProduct()->getModelYear() }}</td>
                <td>{{ $s->getProdProduct()->getListPrice() }}</td>
            </tr>
        @endforeach
    </tr>
@stop

@section('liste_des_magasins')
    @foreach ($stores as $st)
        <tr>
            <th>{{  $st->getStoreId() }}</th>
            <td>{{  $st->getStoreName() }}</td>
            <td>{{  $st->getStreet() }}</td>
            <td>{{  $st->getCity() }}</td>
            <td>{{  $st->getZipCode() }}</td>
            <td>{{  $st->getState() }}</td>
            <td>{{  $st->getPhone() }}</td>
            <td>{{  $st->getEmail() }}</td>
        </tr>
    @endforeach
@stop
