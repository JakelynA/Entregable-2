<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;
use App\Models\Departamento;
use App\Models\Usuario;

class PropietarioController extends Controller
{
    public function index()
    {
        $propietarios = Propietario::all();
        return view('propietario.index',compact('propietarios'));
    }

    public function create()
    {
        return view('propietario.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nombe' => 'required|string|max:255',
            'email' => 'required|string|max:255',

        //$propietario = Propietario::create($request->all());
        //$propietario->departamentos()->createMany($request->departamentos);
        //eturn redirect()->route('propietarios.index')->with('success', 'Propietario creado exitosamente');
    ]);

    $propietarios = propietario::create([
        'nombre' => $request->input('nombre'),
        'email' => $request->input('email'),
        //'propietario_id' => $request->input('propietario_id'),
    ]);
    }

    public function show($id)
    {
        $propietario = Propietario::findOrFail($id);
        return view('propietarios.show', compact('propietario'));
    }

    public function edit($id)
    {
        $propietario = Propietario::findOrFail($id);
        return view('propietarios.edit', compact('propietario'));
    }

    public function update(Request $request, $id)
    {
        $propietario = Propietario::findOrFail($id);
        $propietario->update($request->all());
        foreach ($request->departamentos as $departamento) {
            Departamento::updateOrCreate(['id' => $departamento['id']], $departamento);
        }
        return redirect()->route('propietarios.index')->with('success', 'Propietario actualizado exitosamente');
    }

    public function destroy($id)
    {
        $propietario = Propietario::findOrFail($id);
        $propietario->departamentos()->delete();
        $propietario->delete();
        return redirect()->route('propietarios.index')->with('success', 'Propietario eliminado exitosamente');
    }
}
