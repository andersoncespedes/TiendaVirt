@extends('layouts.app')
@section('content')
<form  method="POST" action="{{route('crearClient')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label for="">Nombre del Cliente</label>
    <input type="text" name="nombre" >
    <label for="">Apellido del Cliente</label>
    <input type="text" name="apellido" >
    <label for="">Cedula del Cliente</label>
    <input type="text" name="cedula" >
    <input type="submit" value="Subir">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
@endsection