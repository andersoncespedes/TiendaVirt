@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="headt">
            <h2>Bienvenido</h2>
        </div>
        <div class="opciones">
            <div class="sele1">
                <div class="op1">
                    <h3><a href= "{{ route('registrarP') }}"> Registrar Producto</a></h3>
                </div>
                <div class="op2">
                    <h3><a href= "{{ route('listaP') }}"> Lista Producto</a></h3>
                </div>
            </div>
            <div class="sele2">
                <div class="op1">
                    sdada
                </div>
                <div class="op2">
                    asda
                </div>
            </div>
        </div>
    </div>
@endsection
