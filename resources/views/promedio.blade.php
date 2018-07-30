@extends('layouts.app')

@section('content')
    <div class="container sistema" >
        <div class="title flex-center">Chi cuadrado</div>
        <form method="POST" action="{{ url('promedioCntr') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="archivo" type="file">
            <input name="intervalos" type="number" placeholder="intervalos">
            <br>
            <button  class="btn btn-primary" type="submit">Aceptar</button>
        </form>
        <br>
        <button class="btn btn-danger"> <a href="{{url('/')}}">Salir </a></button>
    </div>
@endsection