<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index(){
        // Página de inicio de nuestro CRUD
        // Mandar informacion a nuestra vista||view('vista',compact('nombre de la variable o dato a mandar'))||
        // $datos =  Personas::all(); // Esta funcion nos va  a permitir hacer esta informacion valida para amndarla como parametro 
        $datos = Personas::orderBy('paterno', 'asc')->paginate(3); // Agregamos la paginación nativa de Laravel
        return view('inicio', compact('datos'));
    }
    public function create(){
        // Formulario donde nosostros agregamos datos
        return view('agregar');
    }
    public function store(Request $request){
        // Sirve para guardar datos en la Base de Datos
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Agregado con éxito");


    }
    public function show($id){
        // Obtener solo un registro de nuestra tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }
    public function edit($id){
        //  Este metodo nos sirve para treer los datos que se van a editar y los coloca en un formulario
        // Consulta por elocuent
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }
    public function update(Request $request, $id){
        // Este metodo actualiza los datos en la base de datos
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Actualizado con éxito!");
    }
    public function destroy($id){
        // Elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con éxito!");
    }
}
