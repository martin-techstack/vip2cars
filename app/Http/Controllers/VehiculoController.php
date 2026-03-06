<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Cliente;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::with('cliente')->get();
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vehiculo::create($request->all());
    
    return redirect()->route('vehiculos.index')
        ->with('success','Vehículo registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $clientes = Cliente::all();
        
        return view('vehiculos.edit',
             compact('vehiculo','clientes')
    );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'placa'=>'required|max:10',
        'marca'=>'required',
        'modelo'=>'required',
        'anio_fabricacion'=>'required|numeric'
    ]);

    $vehiculo = Vehiculo::findOrFail($id);
    $vehiculo->update($request->all());

    return redirect()->route('vehiculos.index')
        ->with('success','Vehículo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        
        $vehiculo->delete();
        
        return redirect()->route('vehiculos.index');
    }
}
