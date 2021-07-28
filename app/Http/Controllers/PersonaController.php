<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
class PersonaController extends Controller
{
    
    public function index(Request $request)
    {
        // aca obtenemos el valor de input que utilizamos para filtrar
        // si queremos borrar los espacios en blanco utilizamos el metodo trim
        $filter_text = trim($request->get('filter_text'));

        //obtenemos todas la personas almacenadas en la bd por medio de nuestro modelo que construimos y nuetro metodo eloquent(all)
        //$personas=Persona::all();

        /*aca hacemos referencia a nuestra tabla persona por medio de facades, el cual vamos a poder obtener
         las columnas que queremos conforme a la comparacion de nuestro where*/
        $personas=DB::table('persona')
                    ->select('id','surnames','names','address','dpi','mail','telephone')
                    ->where('surnames','LIKE','%'.$filter_text.'%')
                    ->orWhere('names','LIKE','%'.$filter_text.'%')
                    ->orWhere('telephone','LIKE','%'.$filter_text.'%')
                    ->orWhere('dpi','LIKE','%'.$filter_text.'%')
                    ->orderBy('surnames','asc')
                    ->paginate(15);
        return view('persona.index',compact('personas','filter_text'));
    }

    public function create()
    {
        // retornamos nuestra vista para crear personas
        return view('persona.create');
    }

    
    public function store(Request $request)
    {
        // creamos un nuevo objeto de nuestro modelo y los obtenemos mediante el post que enviamos de la vista persona.create
        // y luego almacenamos en la bd
        $persona = new Persona;
        $persona->surnames=$request->input('surnames');
        $persona->names=$request->input('names');
        $persona->address=$request->input('address');
        $persona->dpi=$request->input('dpi');
        $persona->mail=$request->input('mail');
        $persona->telephone=$request->input('telephone');
        $persona->save();
        return redirect()->route('persona.index');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
      
        return view('persona.edit',compact('persona'));
    }

   
    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->surnames=$request->input('surnames');
        $persona->names=$request->input('names');
        $persona->address=$request->input('address');
        $persona->dpi=$request->input('dpi');
        $persona->mail=$request->input('mail');
        $persona->telephone=$request->input('telephone');
        $persona->save();
        return redirect()->route('persona.index');
    }

   
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('persona.index');
    }
}
