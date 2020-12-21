<h4>Liste des magasins</h4>

    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <td scope="col">Nom</td>
                <td scope="col">Adresse</td>
                <td scope="col">Ville</td>
                <td scope="col">Code postal</td>
                <td scope="col">Région</td>
                <td scope="col">Téléphone</td>
                <td scope="col">Email</td>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
