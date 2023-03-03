<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link  href='{{ asset('css/app.css'); }}' rel="stylesheet"/>
    <style>
        table{
            background: white;

        }
        #rath tr td, th{
            text-align: center;
            border: 2px solid black;
            padding: 15px;
        }
        #rath tr:hover{
            transition: 300ms all ease;
            background: gray;
        }
    </style>
    <!-- Scripts -->

</head>
<body>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm container">
            <div class="contain">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="{{route('tienda')}}">Tienda</a></li>
                    <li><a href="{{route('facturaM')}}">Factura</a></li>
                    <li style="float: right"><a href="{{route('logout');}}">LogOut</a></li>
                </ul>
            </div>
        </nav>

        <main class="container">
            @yield('content')
        </main>


    <footer class="container">
        Anderson Cespedes &copy
    </footer>
</body>
</html>
