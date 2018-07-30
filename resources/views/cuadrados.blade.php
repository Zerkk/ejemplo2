@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="sistema">
            <div class="title flex-center">Cuadrados Medios</div>
            <form class="form-horizontal" method="POST" action="{{ url('cuadrados') }}">
                {{ csrf_field() }}

                <div class="form-group flex-center">


                    <div class="col-md-6">
                        <input id="semilla" placeholder="Semilla" type="number" class="form-control" name="semilla" required
                               autofocus>

                    </div>
                </div>

                <div class="form-group flex-center">


                    <div class="col-md-6">
                        <input id="iteraciones" placeholder="Iteraciones" type="number" class="form-control" name="iteraciones"
                               required
                        >

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

    </div>
@endsection