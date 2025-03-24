<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::all();
        return view('municipios.index', compact('municipios'));
    }

    public function create()
    {
        return view('municipios.new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'muni_nomb' => 'required|string|max:255',
        ]);

        Municipio::create([
            'muni_nomb' => $request->muni_nomb,
        ]);

        return redirect()->route('municipios.index')->with('success', 'Municipio agregado correctamente');
    }

    public function edit($id)
    {
        $municipio = Municipio::findOrFail($id);
        return view('municipios.edit', compact('municipio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'muni_nomb' => 'required|string|max:255',
        ]);

        $municipio = Municipio::findOrFail($id);
        $municipio->update([
            'muni_nomb' => $request->muni_nomb,
        ]);

        return redirect()->route('municipios.index')->with('success', 'Municipio actualizado correctamente');
    }

    public function destroy($id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->delete();

        return redirect()->route('municipios.index')->with('success', 'Municipio eliminado correctamente');
    }
}
