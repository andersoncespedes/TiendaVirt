@extends('layouts.app')

@section('content')
    <form action="{{route('facturaR')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label for="">Codigo</label>
        <input type="text" name="code">
        <label for="">Fecha del producto</label>
        <input type="date" name="fecha">
        <select name="producto" id="">
            @foreach ( $product as $value )
                <option value="{{$value->id_prod}}"> {{$value->name_pro}}</option>
            @endforeach
        </select>
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
    @foreach ($factura as $value)
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
        <div>
            code:{{$value->code}}
            Fecha:{{$value->fecha}}

        </div>
    </div>
    @endforeach
@endsection
