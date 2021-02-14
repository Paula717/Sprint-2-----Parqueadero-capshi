@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Actualización de Cliente</h2></font>
    </div>
    <br>
    <form action="{{route('actualizar_cliente', $cliente->id)}}" method="POST">
    @csrf

        <label for="nombre">Nombre completo </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" value="{{$cliente->nombre}}" required>
            </div>

        <label for="nombre">Cedula </label>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id='cedula' name='cedula' placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1" value="{{$cliente->cedula}}" required>
            </div>

        <label for="nombre">Celular </label>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id='celular' name='celular' placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1" value="{{$cliente->celular}}" required>
            </div>

        <label for="nombre">Direccion </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='direccion' name='direccion' placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1" value="{{$cliente->direccion}}" required>
            </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name='correo' placeholder='example@hotmail.com' aria-describedby="correo" aria-describedby="basic-addon1" value="{{$cliente->correo}}" required>
        </div>

        <br>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{route('listaCliente')}}" class="btn btn-danger">Volver</a>

    </form>
    <br><br>
 @stop