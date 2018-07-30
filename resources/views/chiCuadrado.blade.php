@extends('layouts.app')

@section('content')
    <div class="container sistema" >
        <div class="title flex-center">Chi cuadrado</div>

        <div class="panel-body flex-center">

            <table class="table">
                <thead>
                <tr>
                    <th>Intervalo</th>
                    <th>Oi</th>
                    <th>Ei</th>
                    <th>Respuesta</th>
                </tr>
                </thead>
                <tbody>

                @for($i=0;$i<count($rangos);$i++)
                    <tr>
                        <td>{{$rangos[$i] }}</td>
                        <td>{{$arrayOI[$i]}}</td>
                        <td>{{$arrayE[$i]}}</td>
                        <td>{{$arrayRes[$i]}}</td>
                    </tr>
                @endfor

                </tbody>
            </table>
        </div>
        <button class="btn btn-danger"> <a href="{{url('/')}}">Salir </a></button>
    </div>
@endsection