<?php

namespace App\Http\Controllers;

use App\Models\Recinto;
use Illuminate\Http\Request;

class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recintos = Recinto::all();
        //echo $recintos;
        //return response()->json($recintos);
        return view('admin.recintos.index', compact('recintos'));
        
    }

    public function circuns()
    {
        //$cir = 11;
        $recintosa = Recinto::select('circunscripcion')->distinct()->pluck('circunscripcion');
        //echo $recintosa;          
        //return response()->json($recintosa);
        return view('admin.recintos.circuns', compact('recintosa'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.recintos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return response()->json($request->all());        

        $recinto = new Recinto();
        $recinto->departamento = $request->input('departamento');     
        $recinto->provincia = $request->input('provincia');
        $recinto->municipio = $request->input('municipio');
        $recinto->distrito = $request->input('distrito');
        $recinto->zona = $request->input('zona');
        $recinto->circunscripcion = $request->input('circunscripcion');
        $recinto->nombre = $request->input('nombre');
        $recinto->direccion = $request->input('direccion');
        $recinto->nummesas = $request->input('nummesas');
        $recinto->numhabilitados = $request->input('numhabilitados');             
        $recinto->save();

        return redirect()->Route('recintos.index')
        ->with('mensaje', 'Recinto creado con exito!')
        ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //echo $id;
        $recinto = Recinto::find($id);
        return view('admin.recintos.show', compact('recinto'));
        //return response()->json($recinto);        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //echo $id;
        $recinto = Recinto::find($id);
        return view('admin.recintos.edit', compact('recinto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $recinto = Recinto::find($id);
        $recinto->departamento = $request->input('departamento');     
        $recinto->provincia = $request->input('provincia');
        $recinto->municipio = $request->input('municipio');
        $recinto->distrito = $request->input('distrito');
        $recinto->zona = $request->input('zona');
        $recinto->circunscripcion = $request->input('circunscripcion');
        $recinto->nombre = $request->input('nombre');
        $recinto->direccion = $request->input('direccion');
        $recinto->nummesas = $request->input('nummesas');
        $recinto->numhabilitados = $request->input('numhabilitados');             
        $recinto->save();

        return redirect()->Route('recintos.index')
        ->with('mensaje', 'Recinto actualizado con exito!')
        ->with('icono', 'success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //echo $id;        
        $recinto = Recinto::find($id);
        $recinto->delete();

         return redirect()->Route('recintos.index');

    }

    
}
