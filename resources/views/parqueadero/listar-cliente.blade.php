@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>Listado de Clientes </center></font></h2>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cedula</th>
                <th scope="col">Celular</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Correo</th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $p )

                <tr>
                    <td>{{$p->id}} </td>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->cedula}}</td>
                    <td>{{$p->celular}}</td>
                    <td>{{$p->direccion}}</td>
                    <td>{{$p->correo}}</td>
                    <td><a href="{{route('form_actualiza_cliente', $p->id)}}" class="btn btn-success"> Editar </a></td>    
                </tr>
                   
            @endforeach 
            
        </tbody>
        
    </table> 
@stop