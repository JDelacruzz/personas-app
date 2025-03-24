<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::paginate(10); // Paginar los resultados
        return view('municipio.index', compact('municipios')); // Llamar vista correcta
    }

    public function create()
    {
        return view('municipio.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'muni_nomb' => 'required|string|max:255',
        ]);

        Municipio::create($request->all());

        return redirect()->route('municipio.index')->with('success', 'Municipio agregado correctamente');
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
