@extends('layout.master')
    @section('content')
    <br>
    <h2><font color="black"><center>Consulta de Vehiculo </center></font></h2>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col">Color</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$vehiculo->id}}</td>
                <td>{{$vehiculo->placa}}</td>
                <td>{{$vehiculo->marca_veh}}</td>
                <td>{{$vehiculo->color_veh}}</td>

            </tr>
        </tbody>
    </table> 
    <br>
        <a href = "{{route('form_consulta_vehiculo')}}" class="btn btn-success"> Regresar </a>
    @stop