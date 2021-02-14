@extends('layout.master')
    @section('content')
    
    <br>
        <div  align="center">
            <font size=4 face="Comic Sans MS,arial,verdana"><h1>Consultar de Vehiculo</h1> </font>
        </div>
        <br>
        
    <form action="{{route('consultar_vehiculo')}}" method="POST">
    @csrf

        <label for="nombre">Placa </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='nombre' name='placa' placeholder="Numero Placa" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

            <br>
        <button type="submit" class="btn btn-primary">Consultar</button>
    
@stop