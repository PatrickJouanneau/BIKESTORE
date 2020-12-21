
<h4>Liste des marques</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $b)
            <tr>
                <th>{{ $b->getBrandId() }}</th>
                <td>{{ $b->getBrandName() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

