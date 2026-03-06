<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encuestas = Encuesta::all();
        return view('encuestas.index', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
        ]);

        Encuesta::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('encuestas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Encuesta $encuesta)
    {
        return view('encuestas.show', compact('encuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Encuesta $encuesta)
    {
        return view('encuestas.edit', compact('encuesta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Encuesta $encuesta)
    {
        $request->validate([
        'titulo' => 'required',
    ]);
    
    $encuesta->update($request->only('titulo', 'descripcion'));

    return redirect()->route('encuestas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
