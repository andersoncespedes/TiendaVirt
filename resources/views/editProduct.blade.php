@extends('layouts.app')
@section('content')
<form action="{{route('updateP', $product[0]->id)}}" method="POST">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label for="">Nombre del Producto</label>
    <input type="text" name="name_pro" value="{{$product[0]->name_pro}}">
    <label for="">Codigo del producto</label>
    <input type="text" name="code_pro" value="{{$product[0]->code_pro}}">
    <label for="">Cantidad del producto</label>
    <input type="text" name="quanty" value="{{$product[0]->quanty}}">
    <label for="">tipo de producto</label>
    <input type="text" name="type_pro" value="{{$product[0]->type_pro}}">
    <label for="">Marca de producto</label>
    <input type="text" name="marca" value="{{$product[0]->marca}}">
    <input type="submit" value="Subir">
</form>
@endsection
