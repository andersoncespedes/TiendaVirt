@extends('layouts.app')

@section('content')
<table width = '100%' id="stat">
    <tr>
        <td rowspan="2">Nombre del Producto: {{$product[0]->name_pro}}</td>
        <td>Producto Id: {{$product[0]->id}}</td>
    </tr>
    <tr>
        <td>Cantidad de producto: {{$product[0]->quanty}}</td>
    </tr>
    <tr>
        <td >Codigo de producto: {{$product[0]->code_pro}}</td>
        <td rowspan="2">Tipo de producto: {{$product[0]->type_pro}}</td>
    </tr>
    <tr>
        <td >Marca de producto: {{$product[0]->marca}}</td>
    </tr>
</table>
<div id="botones">
    <button class="btn btn-warning">Editar</button>
    <form method="POST" action="{{ route('destroyProd',$product[0]->id )}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>
</div>





@endsection
