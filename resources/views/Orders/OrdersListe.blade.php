<h4>Liste des commandes</h4>
<a id="all-orders" class="btn btn-outline-primary float-right mr-5 mb-4 pr-4">Voir tous les enregistrements</a>
<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Client</th>
            <th scope="col">Statut</th>
            <th scope="col">Date commande</th>
            <th scope="col">Date prévue</th>
            <th scope="col">Date de livraison</th>
            <th scope="col">Magasin</th>
            <th scope="col">Exécutant</th>
        </tr>
    </thead>
    <tbody id="body-order">

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
    </tbody>
</table>
