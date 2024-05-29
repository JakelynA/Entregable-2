<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Propietario;

 
class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index',compact('departamentos'));
    }
 
    public function create()
    {
        return view('departamentos.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'direccion' => 'required|string|max:255',
            'renta' => 'required|string|max:255',
            'propietario_id' => 'required|exists:propietario,id',
        ]);
 
        $departamento = Departamento::create([
            'direccion' => $request->input('direccion'),
            'renta' => $request->input('renta'),
            'propietario_id' => $request->input('propietario_id'),
        ]);
    }

 
        // Si el campo 'bio' es opcional, puedes verificar su existencia antes de crearlo
       // if ($request->has('bio')) {
         //   $usuario->perfil()->create(['bio' => $request->input('bio')]);
       // }
 
       // return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente');
 
    public function show($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('departamentos.show', compact('departamento'));
    }
 
    public function edit($id)
    {
        $departamento = Departamneto::findOrFail($id);
        $propietario = Propietario::all();
        return view('departamentos.edit', compact('departamento', 'propietarios'));
    }
 
    public function update(Request $request, $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());
        //$usuario->perfil()->update($request->only('bio'));
        return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado exitosamente');
    }
 
    public function destroy($id)
    {
        $departamento = Usuario::findOrFail($id);
        $departamento->perfil()->delete();
        $departamento->delete();
        return redirect()->route('departamentos.index')->with('success', 'Departamento eliminado exitosamente');
    }
}
