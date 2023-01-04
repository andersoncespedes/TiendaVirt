@extends('layouts.app')

@section('content')
    <table width = '100%'>
        <tr>
            <td>id</td>
            <td>Nombre</td>
            <td>Codigo</td>
            <td>Cantidad</td>
            <td>Marca</td>
            <td>Tipo de Producto</td>

        </tr>
        @foreach ($product as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name_pro }}</td>
                <td>{{ $value->code_pro }}</td>
                <td>{{ $value->quanty }}</td>
                <td>{{ $value->marca }}</td>
                <td>{{ $value->type_pro }}</td>
            </tr>
        @endforeach
    </table>
@endsection

