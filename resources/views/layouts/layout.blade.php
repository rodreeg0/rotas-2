<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <style>
            .centered {
                position: fixed;
                top: 50%;
                left: 50%;
                /* bring your own prefixes */
                transform: translate(-50%, -50%);
            }
        </style>
        
        <title>Rotas - 2</title>
    </head>
    <body class="h-100 w-100">
        @include('layouts.navbar')
        @yield('content')
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
