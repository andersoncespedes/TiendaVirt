@extends('layouts.app')

@section('content')
    <form action="{{route('productR')}}" method="POST" enctype='multipart/form-data'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label for="">Nombre del Producto</label>
        <input type="text" name="name_pro">
        <label for="">Codigo del producto</label>
        <input type="text" name="code_pro">
        <label for="">Cantidad del producto</label>
        <input type="text" name="quanty">
        <label for="">tipo de producto</label>
        <input type="text" name="type_pro">
        <label for="">Marca de producto</label>
        <input type="text" name="marca">
        <label for="">Imagen</label>
        <input type="file" name="imagen" id="">
        <input type="submit" value="Subir">
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection
