<h4>Liste des clients</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">
                <p>#</p>
            </th>
            <th scope="col">
                <p>Nom</p>
                <p>Prénom</p>
            </th>
            <th scope="col">
                <p>Adresse</p>
            </th>
            <th scope="col">
                <p>Ville</p>
                <p>Code postal</p>
            </th>
            <th scope="col">
                <p>State</p>
            </th>
            <th scope="col">
                <p>Téléphone</p>
                <p>Email</p>
            </th>
            <th scope="col">
                <p>*</p>
            </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $cust)
            <tr>
                <th>{{  $cust->getCustomerId() }}</th>
                <td>
                    <p>{{  $cust->getLastName() }}</p>
                    <p>{{  $cust->getFirstName() }}</p>
                </td>
                <td>{{  $cust->getStreet() }}</td>
                <td>
                    <p>{{  $cust->getCity() }}</p>
                    <p>{{  $cust->getZipCode() }}</p>
                </td>
                <td>{{  $cust->getState() }}</td>
                <td>
                    <p>{{  $cust->getPhone() }}</p>
                    <p>{{  $cust->getEmail() }}</p></td>
                <td>
                    <a href="{{ url('/home/'.$cust->getCustomerId().'/edit') }}"><img src="img/wrench.svg" alt=""></a>&nbsp;&nbsp;
                    <a href="{{ url('/home/'.$cust->getCustomerId().'/delete') }}"><img src="img/trash.svg" alt="Poubelle"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
