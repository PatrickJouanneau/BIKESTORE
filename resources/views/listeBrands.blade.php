@extends('template')

@section('contenu')
    <h4>Liste des marques</h4>
@endsection
@section('liste_des_marques')
        @foreach($brands as $b)
            <tr>
                <th>{{ $b->getBrandId() }}</th>
                <td>{{ $b->getBrandName() }}</td>
            </tr>
        @endforeach
    </tr>
@stop
