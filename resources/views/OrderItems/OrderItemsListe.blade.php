<h4>Suivi des commandes</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">Order_id</th>
            <th scope="col">Item_id</th>
            <th scope="col">Product_id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix</th>
            <th scope="col">Remise</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orderItems as $oi)
            <tr>
                <th>{{ $oi->getOrderId() }}</th>
                <td>{{ $oi->getItemId() }}</td>
                <td>{{ $oi->getProdProduct()->getProductId() }}</td>
                <td>{{ $oi->getProdProduct()->getProductName() }}</td>
                <td>{{ $oi->getQuantity() }}</td>
                <td>{{ $oi->getListPrice() }}</td>
                <td>{{ $oi->getDiscount()*100 }} %</td>
            </tr>
        @endforeach
    </tbody>
</table>
