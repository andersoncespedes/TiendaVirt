@extends('layouts.app')

@section('content')
    <div class="prod_group">
        <form action="{{route('buscar')}}" method="GET">
            <label for="">Buscar</label>
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
        </form>
        

        @foreach ($product as $value)
            <div class="contP">
                <div class="titleP">
                    <h3>{{$value['name_pro']}}</h3>
                </div>
                <div class="contentP">
                    <img src="{{asset("storage/app/".$value['imagen'])}}" alt="">
                    Codigo: {{$value['code_pro']}}<br>
                    Cantidad: {{$value['quanty']}}<br>
                    Marca: {{$value['marca']}}<br>
                    Tipo de Producto: {{$value['type_pro']}}<br>
                    
                </div>
            </div>
        @endforeach
    </div>
@endsection
