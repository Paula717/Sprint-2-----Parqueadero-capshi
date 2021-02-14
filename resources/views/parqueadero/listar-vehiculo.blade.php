@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>Listado de Vehiculos </center></font></h2>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col">Color</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculo as $p )
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->placa}}</td>
                    <td>{{$p->marca_veh}}</td>
                    <td>{{$p->color_veh}}</td>

                    @foreach($cliente as $cli)
                        @if($p->cliente_id == $cli->id)
                            <td>{{$cli->nombre}}</td>
                            
                                @foreach($tarifa as $t)
                                    @if($p->tarifa_id == $t->id)
                                        <td>{{$t->tipo}}</td>
                                    @endif 
                                @endforeach 
                        @endif 
                    @endforeach 
                    <td><a href="{{route('form_actualiza_vehiculo', $p->id)}}" class="btn btn-success"> Editar </a></td>
                </tr>
            @endforeach 
        </tbody>
    </table> 

@stop