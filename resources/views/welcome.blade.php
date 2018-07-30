<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simulación</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #ffffff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
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

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .titleSistema{
            color: #0000F0;
            top: 4px !important;
            margin-top: -400px;
        }
        .sistema{
            background-color: #f5f8fa;
            width: 50% !important;
            left: 300px !important;
            border-color: #2a2a2a;
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            border-style: dotted;
            border-width: 1px;
        }
        .negrilla{
            font-weight: bold;

        }
        .tamañogrande{
            font-size: x-large;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height sistema">


    <div class="content">
        <div class="title m-b-md titleSistema">
            Sistema
        </div>
        <div class=" negrilla tamañogrande"> Escoja un metodo</div>
        <br>
        <div class="controles">
            <div class="links">
                <a href="{{url('cuadrados')}}">Cuadrados Medios</a>
            </div>
            <br>
            <div class="links">
                <a href="{{url('productos')}}">Productos Medios</a>
            </div>
            <br>
            <div class="links">
                <a href="{{url('constante')}}">Multiplicación Constante</a>
            </div>
            <br>
            <div class="links">
                <a href="{{url('congruencia/lineal')}}">Congruencial Lineal</a>
            </div>
            <br>
            <div class="links">
                <a href="{{url('congruencia/cuadratica')}}">Congruencial Cuadratica</a>
            </div>
            <br>
            <div class="links">
                <a href="{{url('pruebas/medias')}}">Pruebas de Medias</a>
            </div>
            <br>
            <div class="links">
                <a href="{{url('chi_cuadrado')}}">Chi Cuadrado</a>
            </div>
            <div class="links">
                <a href="{{url('promedioCntr')}}">Primedio</a>
            </div>
        </div>

    </div>
</div>
</body>
</html>
