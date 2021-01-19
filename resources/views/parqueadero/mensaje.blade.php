@extends('layout.master')
    @section('content')

    <h2><font color="black"><center>Cliente Registrado</center></font></h2>

    @php
        $name = $_POST['nombre'];
        $lastname = $_POST['apellido'];
        $age = $_POST['edad'];
    @endphp

    <h3> Nombre : {{ $name }} </h3>
    <h3> Apellido : {{ $lastname }} </h3>
    <h3> Edad : {{ $age }}</h3>
    <a href="{{ url()->previous()}}"  class="btn btn-primary"> Regresar </a>

@stop