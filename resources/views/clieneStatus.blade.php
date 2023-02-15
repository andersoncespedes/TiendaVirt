@extends('layouts.app')
@section('content')
    <table width = '100%' id="stat">
        <tr>
            <td rowspan="2">Nombre del Producto: {{$cliente->nombre}}</td>
            <td>Producto Id: {{$cliente->apellido}}</td>
        </tr>
        <tr>
            <td>Cantidad de producto: {{$cliente->cedula}}</td>
        </tr>
    </table>
    <div id="botones">
        <a href = "{{route('editP', $cliente->id)}}" class="btn btn-warning" >Editar</a>
        <form method="POST" action="{{ route('destroyProd',$cliente->id )}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection