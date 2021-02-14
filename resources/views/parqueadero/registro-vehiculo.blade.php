@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Registro de Vehiculo</h2></font>
    </div>
    <br>
    <form action="{{route('registrovehi')}}" method="POST">
    @csrf

        <label for="nombre">Cliente </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="cliente" >
                    @foreach($cliente as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                    @endforeach
                </select> 
            </div>

        <label for="nombre">Placa </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='placa' name='placa' placeholder="Placa" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Marca </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='marca_veh' name='marca_veh' placeholder="Marca" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Color </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='color_veh' name='color_veh' placeholder="Color" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Tipo de Vehiculo </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="tipo">
                    @foreach($tarifa as $c)
                        <option value="{{$c->id}}">{{$c->tipo}}</option>
                    @endforeach
                </select> 
            </div>

        <br>
        <button type="submit" class="btn btn-primary">Registrar</button>

        <button type="reset" class="btn btn-danger">Borrar</button>
    
        <a href="{{url('/')}}" class="btn btn-success">Volver</a>
        
    </form>
    <br><br>
 @stop