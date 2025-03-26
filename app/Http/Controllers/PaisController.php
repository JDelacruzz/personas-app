<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    public function index()
    {
        $paises=DB::table('tb_pais')
        ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
        ->select('tb_pais.*', 'tb_municipio.muni_nomb')
        ->get();
    return view("pais.index", ['paises' => $paises]);

    }



    public function create()
    {
        $municipios = DB::table('tb_municipio')
            ->orderBy('muni_nomb')
            ->get();
        return view('pais.new', ['municipios' => $municipios]);

    }

    public function store(Request $request)
    {
        $pais = new Pais();
        $pais->pais_codi = strtoupper(substr($request->name, 0, 3));
        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->code;
        $pais->save();

        $paises = DB::table('tb_pais')
            ->join('tb_municipio', 'tb_pais.pais_capi', '=', 'tb_municipio.muni_codi')
            ->select('tb_pais.*', 'tb_municipio.muni_nomb')
            ->get();
        return view("pais.index", ['paises' => $paises]);

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
