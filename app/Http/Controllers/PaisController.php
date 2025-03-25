<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::paginate(10); // Paginar resultados
        return view('pais.index', compact('paises')); // Llamar vista correcta
    }

    public function create()
    {
        return $this->new();
    }

    public function new()
    {
        return view('pais.new'); // No necesita cargar relaciones
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pais_nomb' => 'required|string|max:255',
            'pais_capi' => 'required|string|max:255',
        ]);

        $pais = new Pais();
        $pais->pais_nomb = $validatedData['pais_nomb'];
        $pais->pais_capi = $validatedData['pais_capi'];
        $pais->save();

        return redirect()->route('pais.index')->with('success', 'Country created successfully.');
    }

    public function edit($id)
    {
        $pais = Pais::findOrFail($id);
        return view('pais.edit', compact('pais'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pais_nomb' => 'required|string|max:255',
            'pais_capi' => 'required|string|max:255',
        ]);

        $pais = Pais::findOrFail($id);
        $pais->update($request->all());

        return redirect()->route('pais.index')->with('success', 'Country updated successfully.');
    }

    public function destroy($id)
    {
        Pais::destroy($id);
        return redirect()->route('pais.index')->with('success', 'Country deleted successfully.');
    }
}
