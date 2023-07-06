<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/delete', function (Request $request) {
    $data = $request->all();

    $id = $data['id'];
    $entidade = $data['entity'];

    switch ($entidade) {
        case 'Nota':
            DB::delete('delete from FonNot where FkNota = ?', [$id]);
            DB::delete('delete from Variante where FkNota = ?', [$id]);
            DB::delete('delete from Nota where IdeNota = ?', [$id]);
            break;
        case 'Publicacao':
            DB::delete('delete from FonPub where FkPublicacao = ?', [$id]);
            DB::delete('delete from Publicacao where IdePublicacao = ?', [$id]);
            break;
        case 'Area':
            DB::delete('delete from Area where IdeArea = ?', [$id]);
            break;
        case 'Fonte':
            DB::delete('delete from EstFon where FkFonte = ?', [$id]);
            DB::delete('delete from FonPub where FkFonte = ?', [$id]);
            DB::delete('delete from FonSec where FkFonte = ?', [$id]);
            DB::delete('delete from FonTra where FkFonte = ?', [$id]);

            $transcricoes =  DB::select('select IdeTranscricao from Transcricao where FkFonte = ?', [$id]);

            foreach($transcricoes as $trancricao){
                DB::delete('delete from TraCri where FkTranscricao = ?', [$trancricao->IdeTranscricao]);
            }

            DB::delete('delete from Transcricao where FkFonte = ?', [$id]);
            DB::delete('delete from Fonte where IdeFonte = ?', [$id]);
            break;
    }
});
