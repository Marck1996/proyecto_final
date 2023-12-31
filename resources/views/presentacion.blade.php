@extends('plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tarea 1 - Juan Marcelo Arancibia Rodriguez</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
        <script src="<?php echo asset('js/jquery.min.js')?>"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Montserrat Thin Black' , sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title_1 {
                font-size: 80px;
            }

            .title_2 {
                font-size: 60px;
            }

            .links > a {
                color: #2D69C1;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title_1 m-b-md">
                    Tarea 1
                </div>
                <div class="title_2 m-b-md">
                    Juan Marcelo Arancibia Rodriguez
                </div>

                <div class="links">
                    <button type = "button" onclick = "location.href = 'Ejercicio1'" class = "btn btn-info btn-lg">Mayor de 3 números</button>
                    
                </div>
                <br>
                <div>
                    <button type = "button" onclick = "location.href = 'Ejercicio2'" class = "btn btn-danger btn-lg">Numero a letras</button>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection