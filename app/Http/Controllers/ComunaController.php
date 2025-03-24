<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comuna;
use Illuminate\Support\Facades\DB;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
   public function index(){
        //$comunas = Comuna:: all();
        $comunas = DB::table('tb_comuna')
        ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
        ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
        ->get();
        return view('comuna.index', ['comunas' => $comunas]);
    }
    
        public function create(){
            $municipios =DB::table('tb_municipio')
            ->orderBy('muni_nomb')
            ->get();
            return view('comuna.new', ['municipios' => $municipios]);
        }
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $comuna = new Comuna();

    // $comuna->comu_codi = $request->id;
    // El código de comuna es auto incremental

    $comuna->comu_nomb = $request->name;
    $comuna->muni_codi = $request->code;

    $comuna->save();

    $comunas = DB::table('tb_comuna')
        ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
        ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
        ->get();

    return view('comuna.index', ['comunas' => $comunas]);
}
/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $comuna = Comuna::find($id);
    $comuna->delete();

    $comunas = DB::table('tb_comuna')
        ->join('tb_municipio', 'tb_comuna.muni_codi', '=', 'tb_municipio.muni_codi')
        ->select('tb_comuna.*', 'tb_municipio.muni_nomb')
        ->get();

    return view('comuna.index', ['comunas' => $comunas]);
}
public function edit($id)
{
    $comuna = Comuna::find($id);
    if (!$comuna) {
        return redirect()->route('comunas.index')->with('error', 'Comuna no encontrada.');
    }

    $municipios = DB::table('tb_municipio')
        ->orderBy('muni_nomb')
        ->get();

    return view('comuna.edit', compact('comuna', 'municipios'));
}

public function update(Request $request, $id)
{
    $comuna = Comuna::find($id);
    if (!$comuna) {
        return redirect()->route('comunas.index')->with('error', 'Comuna no encontrada.');
    }

    $comuna->comu_nomb = $request->name;
    $comuna->muni_codi = $request->code;

    $comuna->save();

    return redirect()->route('comunas.index')->with('success', 'Comuna actualizada correctamente.');
}


}
