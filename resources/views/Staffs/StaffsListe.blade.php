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
        @foreach ($staffs as $staff)
            <tr>
                <th>{{  $staff->getStaffId() }}</th>
                <td>{{  $staff->getLastName() }}</td>
                <td>{{  $staff->getFirstName() }}</td>
                <td>{{  $staff->getEmail() }}</td>
                <td>{{  $staff->getPhone() }}</td>
                <td>{{--  $staff->getPoste() --}}</td>
                <td>{{  $staff->getSalesStores()->getStoreName() }}</td>
                <td>{{  $staff->getManagerId() }}</td>
                <td>{{  $staff->getActive() }}</td>
                <td>
                    <a href="{{-- url('/home/'.$staff->getStaffId().'/edit') --}}"><img src="img/wrench.svg" alt="clé"></a>&nbsp;&nbsp;
                    <a href="{{-- url('/home/'.$staff->getStaffId().'/delete') --}}"><img src="img/trash.svg" alt="Poubelle"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
