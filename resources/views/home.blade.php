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
                <td>{{ $s->getSalesStore()->getStoreName() }}</td>
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

@section('liste_des_clients')
    @foreach ($customers as $cu)
        <tr>
            <th>{{  $cu->getCustomerId() }}</th>
            <td>{{  $cu->getLastName() }}</td>
            <td>{{  $cu->getFirstName() }}</td>
            <td>{{  $cu->getStreet() }}</td>
            <td>{{  $cu->getCity() }}</td>
            <td>{{  $cu->getZipCode() }}</td>
            <td>{{  $cu->getState() }}</td>
            <td>{{  $cu->getPhone() }}</td>
            <td>{{  $cu->getEmail() }}</td>
        </tr>
    @endforeach
@stop

@section('liste_des_employes')
    @foreach ($staffs as $staf)
        <tr>
            <th>{{  $staf->getStaffId() }}</th>
            <td>{{  $staf->getLastName() }}</td>
            <td>{{  $staf->getFirstName() }}</td>
            <td>{{  $staf->getEmail() }}</td>
            <td>{{  $staf->getPhone() }}</td>
            <td>{{--  $staf->getPoste() --}}</td>
            <td>{{  $staf->getSalesStores()->getStoreName() }}</td>
            <td>{{  $staf->getManagerId() }}</td>
            <td>{{  $staf->getActive() }}</td>
        </tr>
    @endforeach
@stop

@section('liste_des_commandes')
    @foreach ($orders as $o)
        <tr>
            <th>{{ $o->getOrderId() }}</th>
            <td>{{ $o->getSalesCustomers()->getLastName() }}</td>
            <td>{{ $o->getOrderStatus() }}</td>
            <td>{{ $o->getOrderdate() }}</td>
            <td>{{ $o->getRequiredDate() }}</td>
            <td>{{ $o->getShippedDate() }}</td>
            <td>{{ $o->getSalesStores()->getStoreName() }}</td>
            <td>{{ $o->getSalesStaffs()->getLastName() }}</td>
        </tr>
    @endforeach
@stop

@section('liste_des_ventes')
    @foreach ($orderItems as $oi)
        <tr>
            <th>{{ $oi->getOrderId() }}</th>
            <td>{{ $oi->getItemId() }}</td>
            <td>{{-- $oi->getProdProducts()->getproductId() --}}</td>
            <td>{{-- $oi->getProdProducts()->getproductName() --}}</td>
            <td>{{ $oi->getQuantity() }}</td>
            <td>{{ $oi->getListPrice() }}</td>
            <td>{{ $oi->getDiscount() }}</td>
        </tr>
    @endforeach
@stop

