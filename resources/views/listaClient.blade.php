@extends('layouts.app')

@section('content')
    <table width = '100%' id="rath">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
        </tr>
        @foreach ($cliente as $value)
            <tr>

                <td>{{ $value->id }}</td>
                <td><a href="{{route('showClientById', $value->id)}}">{{ $value->nombre }}</a></td>
                <td>{{ $value->apellido }}</td>
                <td>{{ $value->cedula }}</td>

            </tr>
        @endforeach
    </table>
@endsection