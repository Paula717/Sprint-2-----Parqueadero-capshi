@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>Listado de Ingreso de Vehiculos </center></font></h2>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Placa</th>
                <th scope="col">Nombre Empleado</th>
                <th scope="col">Pago</th>
                <th scope="col">Ingreso</th>
                <th scope="col">Salida</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($registro as $p )
                <tr>
                    <td>{{$p->id}}</td>
                            @foreach($vehiculo as $v )
                                @if($p->vehiculo_id == $v->id)
                                    <td>{{$v->placa}}</td>

                                    @foreach($empleado as $e)
                                        @if($p->empleado_id == $e->id)
                                            <td>{{$e->nombre}}</td>

                                            @foreach($pago as $g)
                                                @if($p->pago_id == $g->id)
                                                    <td>{{$g->forma_pago}}</td>
                                                @endif 
                                            @endforeach 
                                        @endif 
                                    @endforeach 

                                @endif 
                            @endforeach     
                    <td>{{$p->entrada}}</td>
                    <td>{{$p->salida}}</td>
                    <td>{{$p->total}}</td>
                    <td><a href="{{route('form_actualiza_ingreso', $p->id)}}" class="btn btn-success"> Editar </a></td>
                </tr>
            @endforeach 

           
            
        </tbody>
    </table> 

@stop