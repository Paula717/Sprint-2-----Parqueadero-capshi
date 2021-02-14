@extends('layout.master')
    @section('content')
    <br>
    <h2><font color="black"><center>Consulta de Cliente</center></font></h2>
    <br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cedula</th>
                <th scope="col">Celular</th>
                <th scope="col">Domicilio</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$cliente->id}} </td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->cedula}}</td>
                <td>{{$cliente->celular}}</td>
                <td>{{$cliente->direccion}}</td>   
            </tr>  
        </tbody>
    </table> 
    <br>
        <a href = "{{route('form_consulta')}}" class="btn btn-success"> Regresar </a>
    @stop