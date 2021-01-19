@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Registro de Vehiculo</h2></font>
    </div>
    <br>
    <form action="{{url('registro')}}" method="POST">
    @csrf

        <label for="nombre">Nombre </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Apellido </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='apellido' name='apellido' placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Edad </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='edad' name='edad' min='18' max='100' placeholder="Edad" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Cedula </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='cedula' name='cedula' placeholder="Cedula" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <label for="nombre">Celular </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='celular' name='celular' placeholder="Celular" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name='correo' placeholder='example@hotmail.com' aria-describedby="correo" aria-describedby="basic-addon1" required>
        </div>

        <div>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Tipo de vehiculo</option>
                <option value="1">Carro</option>
                <option value="2">Moto</option>
                <option value="3">Bicicleta</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nombre">Color</label>
            <input type="text" class="form-control rounded-0 shadow-sm" id="car" placeholder="Color" aria-describedby="basic-addon1" required>
        </div>

        <div class="form-group">
            <label for="nombre">Placa</label>
            <input type="text" class="form-control rounded-0 shadow-sm" id="licensePlate" placeholder="NN-NN-LL,NN-LL-NN,....etc" aria-describedby="basic-addon1" required>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="entryDate">Fecha de Entrada</label>
                <input type="date" class="form-control rounded-0 shadow-sm" id="entryDate" aria-describedby="basic-addon1" required>
            </div>

            <div class="col-6">
                <label for="exitDate">Fecha de Salida</label>
                <input type="date" class="form-control rounded-0 shadow-sm" id="exitDate" aria-describedby="basic-addon1" required>
            </div>
        </div>
          
        <br>

        <button type="submit" class="btn btn-primary">Registrar</button>

        <button type="reset" class="btn btn-danger">Borrar</button>
        
        <button type="button" class="btn btn-dark">
            <a href="{{url('/')}}" >Volver</a>
        </button>
    </form>
    <br><br>
 @stop