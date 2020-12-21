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
    </tbody>
</table>
