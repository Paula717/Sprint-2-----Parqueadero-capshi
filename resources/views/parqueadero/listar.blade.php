@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>Listado de Clientes </center></font></h2>

    <br>
    <div class ="container">
        <div class ="row">
            @foreach($clientes as $p )
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="col-md-25">
                        <div class="card-body">
                            <h6 class="card-tittle">{{$p->nombre}}</h6>
                            <p class="card-text" aling="justify"> Celuda: {{$p->cedula}}</p>
                            <p class="card-text" aling="justify"> Celular: {{$p->celular}}</p>
                            <p class="card-text" aling="justify"> Domicilio: {{$p->direccion}}</p>
                            <p class="card-text" aling="justify"> correo: {{$p->correo}}</p>
                            <br>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div> 

@stop