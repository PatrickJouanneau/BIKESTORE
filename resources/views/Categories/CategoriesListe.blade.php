<h4>Liste des catégories</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $c)
            <tr>
                <th>{{ $c->getCategoryId() }}</th>
                <td>{{ $c->getCategoryName() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
