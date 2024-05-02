<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Validation\Rule;

class AlumosController extends Controller
{
   
    public function index()
    {
        $alumno = Alumno::paginate(10);
        return view('Index')->with('alumnos',$alumno);
    }

   
    public function create()
    {
        return view('Create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i',
            'cuenta'=>'required|unique:alumnos',
            'nota'=>'required', 
            'carrera'=>'required'
        ]); 
        
  
        $alumno = new Alumno(); 
        $alumno->nombre=$request->input('nombre');
        $alumno->cuenta=$request->input('cuenta');
        $alumno->nota=$request->input('nota');
        $alumno->carrera=$request->input('carrera');

        $alumno->save(); 

        return redirect()->route('alumnos.index');
    }

  
    public function show(string $id)
    {
        $alumno = Alumno::findOrfail($id);
        return view('Show' , compact('alumno'));
    }

  
    public function edit(string $id)
    {
        $alumno = Alumno::findOrfail($id); // ESTA LINEA SOLO MUESTRA LOS DATOS DE CONTACTO Y DEFINE LA VARIABLE
        return view('Edit')->with('alumnos',$alumno);
    }

 
    public function update(Request $request, string $id)
    {

        $alumno = Alumno::findOrfail($id); 

        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i',
            'cuenta'=>['required',
                 'numeric',Rule::unique('alumnos')->ignore($alumno->id)],
            'nota'=>'required', 
            'carrera'=>'required'
        ]); 
        
        $alumno->nombre=$request->input('nombre');
        $alumno->cuenta=$request->input('cuenta');
        $alumno->nota=$request->input('nota');
        $alumno->carrera=$request->input('carrera');

        $alumno->save(); 

        return redirect()->route('alumnos.index');
    }

   
    public function destroy(string $id)
    {
        Alumno::destroy($id);

        return redirect()->route('alumnos.index');
    }
}
