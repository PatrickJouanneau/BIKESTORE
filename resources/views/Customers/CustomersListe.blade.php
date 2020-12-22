<h4>Liste des clients</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Code postal</th>
            <th scope="col">State</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $cust)
            <tr>
                <th>{{  $cust->getCustomerId() }}</th>
                <td>{{  $cust->getLastName() }}</td>
                <td>{{  $cust->getFirstName() }}</td>
                <td>{{  $cust->getStreet() }}</td>
                <td>{{  $cust->getCity() }}</td>
                <td>{{  $cust->getZipCode() }}</td>
                <td>{{  $cust->getState() }}</td>
                <td>{{  $cust->getPhone() }}</td>
                <td>{{  $cust->getEmail() }}</td>
                <td>
                    <a href="{{ url('/home/'.$cust->getCustomerId().'/edit') }}"><img src="img/wrench.svg" alt=""></a>&nbsp;&nbsp;
                    <a href="{{ url('/home/'.$cust->getCustomerId().'/delete') }}"><img src="img/trash.svg" alt="Poubelle"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
