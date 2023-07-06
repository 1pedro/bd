<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $NomEntrada = $data['NomEntradaPadrao'] ?? '';
        $NomEntradaPadrao = $data['NomEntradaPadrao'] ?? '';
        $TxtAscepcao = $data['TxtAscepcao'] ?? '';
        $DscClassificacao = $data['DscClassificacao'] ?? '';


        DB::insert('insert into Nota (NomEntrada,  NomEntradaPadrao, TxtAscepcao, DscClassificacao )
values (?,  ?, ?, ?)', [$NomEntrada, $NomEntradaPadrao, $TxtAscepcao, $DscClassificacao]);

        return redirect('/dashboard');
    }

    public function edit ($id) {

        $nota = DB::select('select *  from Nota where IdeNota = ?', [$id]);

        if(count($nota) > 0){
            return view('nota.edit', ['nota' => $nota[0]]);
        }
    }


    public function update (string $id, Request $request) {

        $data = $request->all();

        $NomEntrada = $data['NomEntradaPadrao'] ?? '';
        $NomEntradaPadrao = $data['NomEntradaPadrao'] ?? '';
        $TxtAscepcao = $data['TxtAscepcao'] ?? '';
        $DscClassificacao = $data['DscClassificacao'] ?? '';


        DB::update('update Nota set  NomEntrada = ?, NomEntradaPadrao = ?, TxtAscepcao = ?, DscClassificacao = ? WHERE IdeNota = ?', [$NomEntrada, $NomEntradaPadrao, $TxtAscepcao, $DscClassificacao, $id]);

        $updated  = DB::select('select *  from Nota where IdeNota = ?', [$id]);
        return view('nota.edit', ['nota' => $updated[0]]);
    }
}
