
<h4>Liste des clients</h4>
<a id="all-customers" class="btn btn-outline-primary float-right mr-5 mb-4 pr-4">Voir tous les enregistrements</a>
<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Client</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Région</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">@</th>

        </tr>
    </thead>
    <tbody id="body-customer">

        @foreach ($customers as $cust)
           <tr>
                <th>{{--  $cust->getCustomerId() --}}</th>
                <td>{{  $cust->getLastName() }} {{  $cust->getFirstName() }}</td>
                <td>{{  $cust->getStreet() }}</td>
                <td>{{  $cust->getCity() }}</td>
                <td>{{  $cust->getZipCode() }}</td>
                <td>{{  $cust->getState() }}</td>
                <td>{{  $cust->getPhone() }}</td>
                <td>{{  $cust->getEmail() }}</td>
                <td><a href="{{ url('/customers/'.$cust->getCustomerId().'/edit') }}"><img src="img/wrench.svg" alt="Clé"></a>&nbsp;&nbsp;</td>
                <!--<td><a href="{{-- url('/customers'.$cust->getCustomerId().'/delete') --}}"><img src="img/trash.svg" alt="Poubelle"></a></td>-->
           </tr>
        @endforeach
    </tbody>
</table>
