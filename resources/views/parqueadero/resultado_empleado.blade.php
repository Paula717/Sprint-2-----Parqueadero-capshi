@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>Consulta de Empleado</center></font></h2>
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
                <td>{{$empleado->id}} </td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->cedula}}</td>
                <td>{{$empleado->celular}}</td>
                <td>{{$empleado->direccion}}</td>   
            </tr>  
        </tbody>
    </table> 
    <br>
        <a href = "{{route('form_consulta_empleado')}}" class="btn btn-success"> Regresar </a>
    @stop