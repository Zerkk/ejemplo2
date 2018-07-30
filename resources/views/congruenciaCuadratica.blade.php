@extends('layouts.app')

@section('content')
    <div class="container sistema">
        <div class="title flex-center">Congruencia Cuadratica</div>
        <form class="form-horizontal" method="POST" action="{{ url('congruencia/cuadratica') }}">
            {{ csrf_field() }}

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number" placeholder="X0" class="form-control" name="x0" required
                           autofocus>

                </div>
            </div>
            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number" placeholder="M" class="form-control" name="m" required
                           min="-1000000"
                           max="1000000"
                           autofocus>
                </div>
            </div>

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number"  class="form-control"
                           placeholder="Número Impar A" name="a"  required>

                </div>
            </div>

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input id="iteraciones" type="number" class="form-control"
                           placeholder="Número Impar B" name="b" required
                           min="-1000000"
                           max="1000000">

                </div>
            </div>

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input id="iteraciones" type="number" class="form-control"
                           placeholder="Número Impar C" name="c" required
                           min="-1000000"
                           max="1000000">

                </div>
            </div>


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Aceptar
                    </button>
                </div>
            </div>
        </form>
        <button class="btn btn-danger"> <a href="{{url('/')}}">Salir </a></button>
    </div>
@endsection