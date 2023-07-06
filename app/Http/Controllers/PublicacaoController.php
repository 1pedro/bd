<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicacaoController extends Controller
{
    public function store(Request $request){

        $data = $request->all();
        unset($data['_token']);

        $NomTitulo = $data['NomTitulo'] ?? '';
        $NomReferencia = $data['NomReferencia'] ?? '';
        $IdcVeiculo = $data['IdcVeiculo'] ?? '';
        $DatPublicacao = $data['DatPublicacao'] ?? '';
        $NomLink = $data['NomLink'] ?? '';
        $CodDoi = $data['CodDoi'] ?? '';


        $pesquisador = $data['publicacao-pesquisador'];
        $fonte = $data['Publicacao-fonte'];
        $estudo = $data['Publicacao-estudo'];

            DB::insert('insert into Publicacao (NomTitulo,  NomReferencia, IdcVeiculo, DatPublicacao, NomLink, CodDoi)
values (?, ?, ?, ?, ?, ?)', [$NomTitulo, $NomReferencia,$IdcVeiculo,$DatPublicacao,$NomLink,$CodDoi]);

            $pubId = DB::getPdo()->lastInsertId();

            DB::insert('insert into FonPub (FkPublicacao,  FkFonte, FkEstudo, FkCpf)
values (?,  ?, ?, ?)', [$pubId, $fonte, $estudo,  $pesquisador]);

        return redirect('/dashboard');

    }
}
