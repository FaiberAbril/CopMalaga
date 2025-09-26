<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use App\Models\EstadoPrestamo;
use App\Models\Prestamos;
use App\Models\TipoPrestamo;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamos::all();
        return view('prestamos.index', compact('prestamos'));
           
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clintes = clientes::all();
        $tipoprestamos = TipoPrestamo::all();
        $estadoPrestamo = EstadoPrestamo::all();
        return view('Prestamos.create', compact('clintes', 'tipoprestamos', 'estdoPrestamo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prestamo = Prestamos::create($request->all());
        return redirect()->route('prestamos.index')->with('success', 'Prestamo creado exitosamente.');
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
        $prestamo = Prestamos::findOrFail($id);
        $clintes = clientes::all();
        $tipoprestamos = TipoPrestamo::all();
        $estadoPrestamo = EstadoPrestamo::all();
        return view('Prestamos.create', compact('clinetes', 'tipoprestamos', 'estdoPrestamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prestamo = Prestamos::findOrFail($id);
        $prestamo->update($request->all());
        return redirect()->route('prestamos.index')->with('success', 'Prestamo actualizado exitosamente.');
    }

 
    public function destroy(string $id)
    {
        $prestamo = Prestamos::findOrFail($id);
        $prestamo->delete();
        return redirect()->route('prestamos.index')->with('success', 'Prestamo eliminado exitosamente.');
    }
}
