<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Departamento;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::paginate(10); // Paginar los resultados
        return view('municipio.index', compact('municipios')); // Llamar vista correcta
    }

    public function create()
{
    return $this->new();
}


public function new()
{
    $departamentos = Departamento::all(); // Obtener todos los departamentos
    return view('municipio.new', compact('departamentos'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'muni_nomb' => 'required|string|max:255',
        'depa_codi' => 'required|integer', // Asegurar que se recibe
    ]);

    $municipio = new Municipio();
    $municipio->muni_nomb = $validatedData['muni_nomb'];
    $municipio->depa_codi = $validatedData['depa_codi']; // Agregar este campo
    $municipio->save();

    return redirect()->route('municipio.index')->with('success', 'Municipio creado correctamente.');
}



    public function edit($id)
    {
        $municipio = Municipio::findOrFail($id);
        return view('municipio.edit', compact('municipio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'muni_nomb' => 'required|string|max:255',
        ]);

        $municipio = Municipio::findOrFail($id);
        $municipio->update($request->all());

        return redirect()->route('municipio.index')->with('success', 'Municipio actualizado correctamente');
    }

    public function destroy($id)
    {
        Municipio::destroy($id);
        return redirect()->route('municipio.index')->with('success', 'Municipio eliminado correctamente');
    }
}
