<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    public function index()
    {
    $paises = Pais::paginate(10); 
    return view('pais.index', compact('paises'));
    }



    public function create()
    {
        return $this->new();
    }

    public function new()
    {
        return view('pais.new'); 
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

    public function edit($pais_codi)
    {
    $pais = Pais::findOrFail($pais_codi);
    return view('pais.edit', compact('pais'));
    }


    public function update(Request $request, $pais_codi)
    {
    $pais = Pais::findOrFail($pais_codi);
    $pais->update($request->all());
    return redirect()->route('pais.index')->with('success', 'País actualizado correctamente');
    }

    public function destroy($pais_codi)
    {
    $pais = Pais::findOrFail($pais_codi);
    $pais->delete();
    return redirect()->route('pais.index')->with('success', 'País eliminado correctamente');
    }

}
