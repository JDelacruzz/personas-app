<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::paginate(10); // Paginar los resultados
        return view('departamento.index', compact('departamentos'));
    }

    public function create()
    {
        return $this->new();
    }

    public function new()
    {
        return view('departamento.new');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'depa_nomb' => 'required|string|max:255',
        ]);

        Departamento::create($validatedData);

        return redirect()->route('departamento.index')->with('success', 'Departamento creado correctamente.');
    }

    public function edit($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('departamento.edit', compact('departamento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'depa_nomb' => 'required|string|max:255',
        ]);

        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());

        return redirect()->route('departamento.index')->with('success', 'Departamento actualizado correctamente');
    }

    public function destroy($id)
    {
        Departamento::destroy($id);
        return redirect()->route('departamento.index')->with('success', 'Departamento eliminado correctamente');
    }
}
