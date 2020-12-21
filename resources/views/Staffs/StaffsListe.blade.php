<h4>Liste des utilisateurs</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Poste</th>
            <th scope="col">Magasin</th>
            <th scope="col">Responsable</th>
            <th scope="col">Activité</th>
        </tr>
    </thead>
    <tbody>
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
    </tbody>
</table>
