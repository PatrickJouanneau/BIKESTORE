

<h4>Liste des catégories</h4>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $cat)
            <tr>
                <th>{{ $cat->getCategoryId() }}</th>
                <td>{{ $cat->getCategoryName() }}</td>
                <td>
                    <a href="{{ url('/categories/'.$cat->getCategoryId().'/edit') }}"><img src="img/wrench.svg" alt="Clé"></a>&nbsp;&nbsp;
                    <a href="{{ url('/categories/'.$cat->getCategoryId().'/delete') }}"><img src="img/trash.svg" alt="Poubelle"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
