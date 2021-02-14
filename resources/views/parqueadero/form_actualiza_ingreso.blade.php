@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Actualización de Ingreso de Vehiculos</h2></font>
    </div>
    <br>
    <form action="{{route('actualizar_ingreso', $registro->id)}}" method="POST">
    @csrf

    <label for="nombre">Placa del Vehiculo </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="placa">
                    @foreach($vehiculo as $c)
                        <option value="{{$c->id}}">{{$c->placa}}</option>
                    @endforeach
                </select> 
            </div>

        <label for="nombre">Nombre Empleado </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="nombre">
                    @foreach($empleado as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                    @endforeach
                </select> 
            </div>    

        <label for="nombre">Forma de Pago </label>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="pago">
                    @foreach($pago as $c)
                        <option value="{{$c->id}}">{{$c->forma_pago}}</option>
                    @endforeach
                </select> 
            </div>
        
        <div class="row">
            <div class="col-6">
                <label for="entryDate">Fecha de Ingreso</label>
                <input type="date" class="form-control rounded-0 shadow-sm" id="fecha_ingreso" name="fecha_ingreso" aria-describedby="basic-addon1" value="{{$registro->entrada}}" required>
            </div>

            <div class="col-6">
                <label for="exitDate">Fecha de Salida</label>
                <input type="date" class="form-control rounded-0 shadow-sm" id="fecha_salida"  name="fecha_salida" aria-describedby="basic-addon1" value="{{$registro->salida}}" required>
            </div>
        </div>


        <label for="nombre">Total </label>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id='total' name='total' placeholder="$" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
        <br>

        <button type="submit" class="btn btn-success">Actualizar</button>

        <a href="{{route('listarIngreso')}}" class="btn btn-danger">Volver</a>

    </form>
    <br><br>
 @stop