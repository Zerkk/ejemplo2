@extends('layouts.app')

@section('content')
    <div class="container sistema">
        <div class="title flex-center">Multiplicacion constante</div>
        <form class="form-horizontal" method="POST" action="{{ url('constante') }}">
            {{ csrf_field() }}

            <div class="form-group flex-center">


                <div class="col-md-6">
                    <input type="number" placeholder="X0" class="form-control" name="x0" required
                           autofocus>

                </div>
            </div>
            <div class="form-group  flex-center">


                <div class="col-md-6">
                    <input type="number" placeholder="X1" class="form-control" name="x1" required
                           autofocus>

                </div>
            </div>

            <div class="form-group  flex-center">


                <div class="col-md-6">
                    <input id="iteraciones" placeholder="Iteraciones" type="number" class="form-control" name="iteraciones"
                           required
                    >

                </div>
            </div>


            <div class="form-group  flex-center">
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