<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request; use App\Models\Cliente; class ClienteController
extends Controller {

public function index(){ 
//Obtener datos por ORM Eloquent    
$clientes = Cliente::All();
//Obtener datos por el metodo get
//$clientes=DB::table('clientes')
//->get();
//$clientes=DB::insert('select * from clientes where estado= "Activo"');


return view('clientes.index',compact('clientes')); } 


public function crear(Request $request){
Cliente::create([ 
           'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'edad' => $request->input('edad'),
            'ci' => $request->input('ci'),
            'correo' => $request->input('correo'),
            'fecha_nac' => $request->input('fecha_nac'),
            'estado' => $request->input('estado'),
        ]);
			return redirect()->route('index')->with('success','Se creo correctamente!');
    }

public function formulario(){
	return view('clientes.formulario');
   }
    public function eliminar($id){
        $clientes =Cliente::find($id);
        $clientes->delete();
        return redirect()->route('index');
    }
    public function editar($id){
        $clientes=Cliente::find($id);
        return view('clientes.editar',compact('clientes'));

    }
    public function actualizar(Request $request, $id)
    {
    $clientes = Cliente::find($id);
    $clientes->nombre = $request->input('nombre');
    $clientes->apellido = $request->input('apellido');
    $clientes->edad = $request->input('edad');
    $clientes->ci = $request->input('ci');
    $clientes->correo = $request->input('correo');
    $clientes->fecha_nac = $request->input('fecha_nac');
    $clientes->estado = $request->input('estado');
    $clientes->save();
    return redirect()->route('index');
    }




}