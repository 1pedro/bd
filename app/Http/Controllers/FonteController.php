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
        $secoes = Helpers::toSelect($rawSecoes, 'NomSecao', 'IdeSecao');

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


        DB::insert('insert into Fonte (NomTitulo,  DscDescricao, IdcEspecie, NomInstituicaoProdutora, DatDataCronologica, DatDataProducao, link)
values (?,  ?, ?, ?, ?, ?, ?)', [$NomTitulo, $DscDescricao, $IdcEspecie, $NomInstituicaoProdutora, $DatDataCronologica, $DatDataProducao, $link]);

        return redirect('/dashboard');
    }

    public function edit(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);


        DB::insert('insert into Fonte (NomTitulo,  DscDescricao, IdcEspecie, NomInstituicaoProdutora, DatFonte, DatProducao, link)
values (?, ?, ?, ?, ?, ?, ?, ?, ?)', array_values($data));
    }
}
