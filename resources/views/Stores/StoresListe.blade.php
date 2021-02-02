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
            @foreach ($stores as $store)
                <tr>
                    <th>{{  $store->getStoreId() }}</th>
                    <td>{{  $store->getStoreName() }}</td>
                    <td>{{  $store->getStreet() }}</td>
                    <td>{{  $store->getCity() }}</td>
                    <td>{{  $store->getZipCode() }}</td>
                    <td>{{  $store->getState() }}</td>
                    <td>{{  $store->getPhone() }}</td>
                    <td>{{  $store->getEmail() }}</td>
                    <td>
                        <a href="{{ url('/stores/'.$store->getStoreId().'/edit') }}"><img src="img/wrench.svg" alt=""></a>&nbsp;&nbsp;
                        <!--<a href="{{-- url('/stores/'.$store->getStoreId().'/delete') --}}"><img src="img/trash.svg" alt="Poubelle"></a>-->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

