@extends('layouts.app')

@section('content')
    <div class="container sistema">
        <div class="title  flex-center">Congruencia Lineal</div>
        <form class="form-horizontal" method="POST" action="{{ url('congruencia/lineal') }}">
            {{ csrf_field() }}

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number"  placeholder="X0" class="form-control" name="x0" required
                           autofocus>

                </div>
            </div>
            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number" placeholder="K" class="form-control" name="k" required
                           min="-1000000"
                           max="1000000"
                           autofocus>
                </div>
            </div>

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number" class="form-control"
                           placeholder="Número Impar C" name="c"  required>

                </div>
            </div>

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input id="iteraciones" type="number" class="form-control"
                           placeholder="Número Impar G" name="g" required
                           min="-1000000"
                           max="1000000">

                </div>
            </div>


            <div class="form-group flex-center">
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