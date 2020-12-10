@extends('home')

@section('liste_des_catégories')
        @foreach($categories as $c)
            <tr>
                <th>{{ $c->getCategoryId() }}</th>
                <td>{{ $c->getCategoryName() }}</td>
            </tr>
        @endforeach
    </tr>
@stop
