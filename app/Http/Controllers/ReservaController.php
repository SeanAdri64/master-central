<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Usuario;
use App\Models\Laboratorio;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::with(['usuario','laboratorio'])->get();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('reservas.create', compact('usuarios','laboratorios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Reserva::create($request->all());
        return redirect()->route('reservas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        $usuarios = Usuario::all();
        $laboratorios = Laboratorio::all();
        return view('reservas.edit', compact('reserva','usuarios','laboratorios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*
        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());
        return redirect()->route('reservas.index');*/
        $request->validate([
    'usuario_id' => 'required|exists:usuarios,id',
    'laboratorio_id' => 'required|exists:laboratorios,id',
    'fecha_inicio' => 'required|date',
    'fecha_fin' => 'required|date|after:fecha_inicio',
]);

$reserva->update($request->all());

return redirect('/reservas')->with('success', 'Reserva actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();
        return redirect()->route('reservas.index');
    }
}
