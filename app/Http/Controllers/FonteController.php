<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;
class FonteController extends Controller
{
    public function index()
    {

        $rawEstudos = DB::select('select IdeEstudo,NomNome  from Estudo');
        $rawSecoes = DB::select('select *  from Secao');

        $estudos = Helpers::toSelect($rawEstudos, 'IdeEstudo', 'NomNome');
        $secoes = Helpers::toSelect($rawSecoes,  'IdeSecao', 'NomSecao');

        return view('fonte.new', ['estudos' => $estudos, 'secoes' => $secoes]);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $NomTitulo = $data['NomTitulo'] ?? '';
        $DscDescricao = $data['DscDescricao'] ?? '';
        $IdcEspecie = $data['IdcEspecie'] ?? '';
        $NomInstituicaoProdutora = $data['NomInstituicaoProdutora'] ?? '';
        $DatDataCronologica = $data['DatDataCronologica'] ?? '';
        $DatDataProducao = $data['DatDataProducao'] ?? '';
        $link = $data['link'] ?? '';
        $cod = $data['CodCodigo'] ?? '';


        DB::insert('insert into Fonte (NomTitulo,  DscDescricao, IdcEspecie, NomInstituicaoProdutora, DatDataCronologica, DatDataProducao, link)
values (?,  ?, ?, ?, ?, ?, ?)', [$NomTitulo, $DscDescricao, $IdcEspecie, $NomInstituicaoProdutora, $DatDataCronologica, $DatDataProducao, $link]);

        $fonteId = DB::getPdo()->lastInsertId();

        if($data['estudos-fonte']){
            DB::insert('insert into EstFon (fkEstudo, fkFonte, DtEstFon) values(?, ?, ?)', [$data['estudos-fonte'],$fonteId, $DatDataCronologica]);
        }

        if($data['fonte-secao']){
            DB::insert('insert into FonSec (FkFonte, FkSecao, CodCodigo) values(?, ?, ?)', [$fonteId,$data['fonte-secao'], $cod]);
        }
        return redirect('/dashboard');
    }

    public function edit ($id) {
        $rawEstudos = DB::select('select IdeEstudo,NomNome  from Estudo');
        $estudos = Helpers::toSelect($rawEstudos, 'IdeEstudo', 'NomNome');
        $rawSecoes = DB::select('select *  from Secao');
        $secoes = Helpers::toSelect($rawSecoes,  'IdeSecao', 'NomSecao');

        $fonte = DB::select('select *  from Fonte where IdeFonte = ?', [$id]);

        $cod = DB::select('select *  from FonSec where FkFonte = ?', [$id])[0];


        if(count($fonte) > 0){
            return view('fonte.edit', ['fonte' => $fonte[0], 'secoes' => $secoes, 'estudos' => $estudos, 'cod' =>$cod->CodCodigo]);
        }
    }
}
