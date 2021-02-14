<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Tarifa;
use App\Models\Registro;
use App\Models\Empleado;
use App\Models\Pago;

class parqueaderoController extends Controller
{
    //Cliente-Registrar
    public function registrar()
    {
        return view('parqueadero.registro-cliente');
    }

    public function mensaje(Request $request)
    {
        //registro de cliente
        $cliente = new Cliente();
        $cliente ->nombre = $request->input('nombre');
        $cliente ->cedula = $request->input('cedula');
        $cliente ->celular = $request->input('celular');
        $cliente ->direccion = $request->input('direccion');
        $cliente ->correo = $request->input('correo');
        $cliente ->save();
        return redirect()->route('listaCliente');
    }

    //Cliente-Consultar
    public function form_consulta()
    {
        return view('parqueadero.consultar-cliente');
    }

    //Cliente-Consultar
    public function consultar(Request $request)
    {
        $nombre = $request->input('nombre');
        $cliente = Cliente::where('nombre','like', $nombre)->first();
        if($cliente)
            return view('parqueadero.resultado', compact('cliente'));
        else
        return view('parqueadero.mensajerror');
    }

    //Cliente-Listar
    public function listarCliente()
    {
        $cliente = Cliente::all();
        return view('parqueadero.listar-cliente',['clientes' => $cliente]);
    }

    //Actualizar-cliente
    public function form_actualiza_cliente($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('parqueadero.form_actualiza_cliente', compact('cliente'));
    }

    public function actualizar_cliente(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente ->nombre = $request->input('nombre');
        $cliente ->cedula = $request->input('cedula');
        $cliente ->celular = $request->input('celular');
        $cliente ->direccion = $request->input('direccion');
        $cliente ->correo = $request->input('correo');
        $cliente ->save();
        return redirect()->route('listaCliente');
    }


    //Vehiculo-Registar
    public function registrarvehi()
    {
        $cliente = Cliente::all();
        $tarifa = Tarifa::all();
        $empleado = Empleado::all();
        $pago = Pago::all();
        $registro = Registro::all();
        return view('parqueadero.registro-vehiculo', compact('cliente','tarifa','empleado','pago','registro'));
    }

    public function mensajevehi(Request $request)
    {
        //registro de vehiculo
        $vehiculo = new Vehiculo();
        $vehiculo ->placa = $request->input('placa');
        $vehiculo ->marca_veh = $request->input('marca_veh');
        $vehiculo ->color_veh = $request->input('color_veh');
        $vehiculo ->cliente_id = $request->input('cliente');
        $vehiculo ->tarifa_id = $request->input('tipo');
        $vehiculo ->save();
        return redirect()->route('listaVehiculo');
    }

    //Vehiculo-Consultar
    public function form_consulta_vehiculo()
    {
        return view('parqueadero.consultar-vehiculo');
    }

    //Vehiculo-Consultar
    public function consultar_vehiculo(Request $request)
    {
        $placa = $request->input('placa');
        $cliente = Cliente::all();
        $vehiculo = Vehiculo::where('placa','like', $placa)->first();
        if($vehiculo)
            return view('parqueadero.resultado_vehiculo', compact('vehiculo'))->with(['cliente' => $cliente ]);
        else
        return view('parqueadero.mensaje_vehiculo');
    }

    //Vehiculo-Listar
    public function listarVehiculo()
    {
        $vehiculo = Vehiculo::all();
        $cliente = Cliente::all();
        $tarifa = Tarifa::all();
        return view('parqueadero.listar-vehiculo',['vehiculo' => $vehiculo ])->with(['cliente' => $cliente ])->with(['tarifa' => $tarifa ]);
    }

    //Actualizar-vehiculo
    public function form_actualiza_vehiculo($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $cliente = Cliente::all();
        $tarifa = Tarifa::all();
        return view('parqueadero.form_actualiza_vehiculo', compact('vehiculo','cliente','tarifa'));
    }

    public function actualizar_vehiculo(Request $request, $id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo ->placa = $request->input('placa');
        $vehiculo ->marca_veh = $request->input('marca_veh');
        $vehiculo ->color_veh = $request->input('color_veh');
        $vehiculo ->cliente_id = $request->input('cliente');
        $vehiculo ->tarifa_id = $request->input('tipo');
        $vehiculo ->save();
        return redirect()->route('listaVehiculo');
    }

    //Registro-Registar
    public function registraringreso()
    {
        $vehiculo = Vehiculo::all();
        $tarifa = Tarifa::all();
        $empleado = Empleado::all();
        $pago = Pago::all();
        return view('parqueadero.registro-ingreso', compact('vehiculo','tarifa','empleado','pago'));
    }

    public function mensajeingreso(Request $request)
    {
        //registro de ingreso
        $registro = new Registro();
        $registro ->vehiculo_id = $request->input('placa');
        $registro ->empleado_id = $request->input('nombre');
        $registro ->pago_id = $request->input('pago');
        $registro ->entrada = $request->input('fecha_ingreso');
        $registro ->salida = $request->input('fecha_salida');
        $registro ->total = $request->input('total');
        $registro ->save();
        return redirect()->route('listarIngreso');
    }

    //Registro-Listar
    public function listarIngreso(Request $request)
    {
        $registro = Registro::all();
        $vehiculo = Vehiculo::all();
        $empleado = Empleado::all();
        $pago = Pago::all();
        return view('parqueadero.listar-ingreso',['registro' => $registro ])->with(['vehiculo' => $vehiculo ])->with(['empleado' => $empleado ])->with(['pago' => $pago ]); 
    }

    //Actualizar-registro
    public function form_actualiza_ingreso($id)
    {
        $registro = Registro::findOrFail($id);
        $vehiculo = Vehiculo::all();
        $tarifa = Tarifa::all();
        $empleado = Empleado::all();
        $pago = Pago::all();
        return view('parqueadero.form_actualiza_ingreso', compact('registro','vehiculo','tarifa','empleado','pago'));
    }

    public function actualizar_ingreso(Request $request, $id)
    {
        $registro = Registro::findOrFail($id);
        $registro ->vehiculo_id = $request->input('placa');
        $registro ->empleado_id = $request->input('nombre');
        $registro ->pago_id = $request->input('pago');
        $registro ->entrada = $request->input('fecha_ingreso');
        $registro ->salida = $request->input('fecha_salida');
        $registro ->total = $request->input('total');
        $registro ->save();
        return redirect()->route('listarIngreso');
    }

    //Empleado

    //Empleado-Registrar
    public function registro_empleado()
    {
        return view('parqueadero.registro-empleado');
    }

    public function mensaje_empleado(Request $request)
    {
        //registro de empleado
        $empleado = new Empleado();
        $empleado ->nombre = $request->input('nombre');
        $empleado ->cedula = $request->input('cedula');
        $empleado ->celular = $request->input('celular');
        $empleado ->direccion = $request->input('direccion');
        $empleado ->correo = $request->input('correo');
        $empleado ->save();
        return redirect()->route('listaEmpleado');
    }

    //Empelado-Consultar
    public function form_consulta_empleado()
    {
        return view('parqueadero.consultar-empleado');
    }

    //empleado-Consultar
    public function consultar_empleado(Request $request)
    {
        $nombre = $request->input('nombre');
        $empleado = Empleado::where('nombre','like', $nombre)->first();
        if($empleado)
            return view('parqueadero.resultado_empleado', compact('empleado'));
        else
        return view('parqueadero.mensajerror_empleado');
    }

    //empleado-Listar
    public function listarEmpleado()
    {
        $empleado = Empleado::all();
        return view('parqueadero.listar-empleado',['empleado' => $empleado]);
    }

    //Actualizar-empleado
    public function form_actualiza_empleado($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('parqueadero.form_actualiza_empleado', compact('empleado'));
    }

    public function actualizar_empleado(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado ->nombre = $request->input('nombre');
        $empleado ->cedula = $request->input('cedula');
        $empleado ->celular = $request->input('celular');
        $empleado ->direccion = $request->input('direccion');
        $empleado ->correo = $request->input('correo');
        $empleado ->save();
        return redirect()->route('listaEmpleado');
    }

}
