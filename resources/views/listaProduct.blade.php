@extends('layouts.app')

@section('content')
    <table width = '100%' id="rath">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Cantidad</th>
            <th>Marca</th>
            <th>Tipo de Producto</th>

        </tr>
        @foreach ($product as $value)
            <tr>

                <td>{{ $value->id_prod }}</td>
                <td><a href="{{route('showById', $value->id_prod)}}">{{ $value->name_pro }}</a></td>
                <td>{{ $value->code_pro }}</td>
                <td>{{ $value->quanty }}</td>
                <td>{{ $value->marca }}</td>
                <td>{{ $value->type_pro }}</td>

            </tr>
        @endforeach
    </table>
@endsection

