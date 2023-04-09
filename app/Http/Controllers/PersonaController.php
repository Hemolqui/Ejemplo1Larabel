<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gatito; // sumamente impòrtante 
use App\Models\Persona; // sumamente impòrtante 
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.persona.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gatitos = Gatito::orderBy('nombre', 'ASC')->get();
        return view('modulos.persona.crear',compact('gatitos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$personas = Persona::create($request->all()); // extrae todos los campos del formulario
        $persona = new Persona();
        $persona->id_gatito = $request->id_gatito;
        $persona->nombre = $request->nombre;
        $persona->edad = $request->edad;
        $persona->save();
        return redirect()->route('persona.index')->with('info', 'Persona creada con exito');


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
    public function edit(Persona $persona)
    {
        $gatitos = Gatito::orderBy('nombre', 'ASC')->get();
        return view('modulos.persona.editar',compact('gatitos','persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->id_gatito = $request->id_gatito;
        $persona->nombre = $request->nombre;
        $persona->edad = $request->edad;
        $persona->update();
        return redirect()->route('persona.index')->with('info', 'Persona editada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('persona.index')->with('info', 'Persona eliminada con exito');
    }
}
