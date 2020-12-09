@extends('template')

@section('liste_des_marques')
    <tr>
        @foreach($brands as $b)
            <th>{{ $b->getId() }}</th>
            <td>{{ $b->getName() }}</td>
        @endforeach
    </tr>
@stop
