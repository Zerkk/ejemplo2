@extends('layouts.app')

@section('content')
    <div class="container sistema" >
        <div class="title flex-center">Chi cuadrado</div>
        <form method="POST" action="{{ url('chi_cuadrado') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="archivo" type="file">
            <br>
            <button  class="btn btn-primary" type="submit">Aceptar</button>
        </form>
        <br>
        <button class="btn btn-danger"> <a href="{{url('/')}}">Salir </a></button>
    </div>
@endsection