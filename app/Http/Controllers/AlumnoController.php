<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $alumnos=DB::table('alumnos')
        ->select('id','n_control','nombre','fecha_de_nacimiento','semestre_actual','carrera','especialidad')
        ->where('n_control','LIKE','%'.$texto.'%')
        ->orWhere('nombre','LIKE','%'.$texto.'%')
        ->orderBy('n_control','asc')
        ->paginate(10);
                               

        return view('alumno.index',compact('alumnos','texto'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno;
        $alumno->n_control=$request->input('n_control');
        $alumno->nombre=$request->input('nombre');
        $alumno->fecha_de_nacimiento=$request->input('fecha_de_nacimiento');
        $alumno->semestre_actual=$request->input('semestre_actual');
        $alumno->carrera=$request->input('carrera');
        $alumno->especialidad=$request->input('especialidad');
        $alumno->save();
        return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=Alumno::findOrFail($id);
        
        return view('alumno.edit',compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno=Alumno::findOrFail($id);
        $alumno->n_control=$request->input('n_control');
        $alumno->nombre=$request->input('nombre');
        $alumno->fecha_de_nacimiento=$request->input('fecha_de_nacimiento');
        $alumno->semestre_actual=$request->input('semestre_actual');
        $alumno->carrera=$request->input('carrera');
        $alumno->especialidad=$request->input('especialidad');
        $alumno->save();
        return redirect()->route('alumno.index');
    }


    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno=Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumno.index');
    }
}