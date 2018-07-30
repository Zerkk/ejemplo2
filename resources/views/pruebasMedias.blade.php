@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Datos Iniciales</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('congruencia/cuadratica') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-md-4 control-label">X0</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="x0" required
                                           autofocus>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">M</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="m" required
                                           min="-1000000"
                                           max="1000000"
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">a</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control"
                                           placeholder="Número Impar" name="a"  required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="iteraciones" class="col-md-4 control-label">b</label>

                                <div class="col-md-6">
                                    <input id="iteraciones" type="number" class="form-control"
                                           placeholder="Número Impar" name="b" required
                                           min="-1000000"
                                           max="1000000">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="iteraciones" class="col-md-4 control-label">c</label>

                                <div class="col-md-6">
                                    <input id="iteraciones" type="number" class="form-control"
                                           placeholder="Número Impar" name="c" required
                                           min="-1000000"
                                           max="1000000">

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Realizar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection