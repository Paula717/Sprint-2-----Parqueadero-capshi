@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Actualización de Vehiculo</h2></font>
    </div>
    <br>
    <form action="{{route('actualizar_vehiculo', $vehiculo->id)}}" method="POST">
    @csrf

        <label for="nombre">Cliente </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="cliente"  >
                    @foreach($cliente as $c)
                        <option value="{{$c->id}}" >{{$c->nombre}}</option>
                    @endforeach
                </select> 
            </div>

        <label for="nombre">Placa </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='placa' name='placa' placeholder="Placa" aria-label="Username" aria-describedby="basic-addon1" value="{{$vehiculo->placa}}" required>
            </div>

        <label for="nombre">Marca </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='marca_veh' name='marca_veh' placeholder="Marca" aria-label="Username" aria-describedby="basic-addon1" value="{{$vehiculo->marca_veh}}" required>
            </div>

        <label for="nombre">Color </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='color_veh' name='color_veh' placeholder="Color" aria-label="Username" aria-describedby="basic-addon1" value="{{$vehiculo->color_veh}}" required>
            </div>

        <label for="nombre">Tipo de Vehiculo </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="tipo" >
                    @foreach($tarifa as $c)
                        <option value="{{$c->id}}">{{$c->tipo}}</option>
                    @endforeach
                </select> 
            </div>

        <br>
        <button type="submit" class="btn btn-success">Actualizar</button>

        <a href="{{route('listaVehiculo')}}" class="btn btn-danger">Volver</a>
    </form>
    <br><br>
 @stop