<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = DB::table('tb_departamento')
        ->join('tb_pais', 'tb_departamento.pais_codi', '=', 'tb_pais.pais_codi')
        ->select('tb_departamento.*', 'tb_pais.pais_nomb')
        ->get();
        return view('departamento.index', ['departamentos' => $departamentos]);
    }

    public function create()
    {
        $paises = DB::table('tb_pais')->orderBy('pais_nomb')->get();
        return view('departamento.new', ['paises' => $paises]);
    }

    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->depa_nomb = $request->name;
        $departamento->pais_codi = $request->country_code;
        $departamento->save();

        $departamentos = DB::table('tb_departamento')
            ->join('tb_pais', 'tb_departamento.pais_codi', '=', 'tb_pais.pais_codi')
            ->select('tb_departamento.*', 'tb_pais.pais_nomb')
            ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);
    }
    public function edit($id)
    {
        $departamento = Departamento::find($id);
        $paises = DB::table('tb_pais')->orderBy('pais_nomb')->get();

        return view('departamento.edit', [
            'departamento' => $departamento,
            'paises' => $paises
]);
    }

    public function update(Request $request, $id)
    {
        $departamento = Departamento::find($id);
        $departamento->depa_nomb = $request->name;
        $departamento->pais_codi = $request->country_code;
        $departamento->save();


        $departamentos = DB::table('tb_departamento')
            ->join('tb_pais', 'tb_departamento.pais_codi', '=', 'tb_pais.pais_codi')
            ->select('tb_departamento.*', 'tb_pais.pais_nomb')
            ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);;
    }

    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        $departamentos = DB::table('tb_departamento')
            ->join('tb_pais', 'tb_departamento.pais_codi', '=', 'tb_pais.pais_codi')
            ->select('tb_departamento.*', 'tb_pais.pais_nomb')
            ->get();

        return view('departamento.index', ['departamentos' => $departamentos]);
    }
}
