
<div class="pb-2 pt-2">
    <h4>Liste des marques</h4>
</div>

<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
            <tr>
                <th>{{ $brand->getBrandId() }}</th>
                <td>{{ $brand->getBrandName() }}</td>
                <td>
                    <a href="{{ url('/brands/'.$brand->getBrandId().'/edit') }}"><img src="img/wrench.svg" alt="Clé"><i class="bi bi-wrench"></i></a>&nbsp;&nbsp;
                    <a href="{{ url('/brands/'.$brand->getBrandId().'/delete') }}"><img src="img/trash.svg" alt="Poubelle"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

