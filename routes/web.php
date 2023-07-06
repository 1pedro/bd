<?php

use App\Helpers;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\FonteController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicacaoController;
use App\Http\Controllers\TranscricaoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    $fontes = DB::select('select *  from Fonte');
    $estudos = DB::select('select *  from Estudo');
    $publicacoes = DB::select('select *  from Publicacao');
    $pesquisadores = DB::select('select *  from Pesquisador');
    $areas = DB::select('select *  from Area');
    $notas = DB::select('select *  from Nota');
    $projetos = DB::select('select *  from Projeto');
    $transcricoes = DB::select('select *  from Transcricao');


    return view('dashboard', ['estudos' => $estudos,
        'publicacoes' => $publicacoes,
        'pesquisadores' => $pesquisadores,
        'areas' => $areas,
        'notas' => $notas,
        'projetos' => $projetos,
        'fontes' => $fontes]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/fonte', [FonteController::class, 'store'])->name('store_fonte');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/fonte', [FonteController::class, 'index'])->name('new_fonte');

    Route::get('/fonte/{id}/edit', [FonteController::class, 'edit'])->name("edit_fonte");

    Route::get('/publicacao', function () {

        $rawEstudos = DB::select('select *  from Estudo');
        $rawFontes = DB::select('select *  from Fonte');
        $rawPesquisadores = DB::select('select *  from Pesquisador');

        $estudos = Helpers::toSelect($rawEstudos,'IdeEstudo', 'NomNome');
        $fontes = Helpers::toSelect($rawFontes,'IdeFonte', 'NomTitulo' );
        $pesquisadores = Helpers::toSelect($rawPesquisadores, 'IdeCpf', 'NomNome');

        return view('publicacao.new', ['estudos' => $estudos, 'fontes' => $fontes, 'pesquisadores' => $pesquisadores]);
    })->name('new_publicacao');
    Route::post('/publicacao', [PublicacaoController::class, 'store'])->name('store_publicacao');


    Route::get('/nota', function () {
        return view('nota.new');
    })->name('new_nota');

    Route::get('/nota/{id}/edit', [NotaController::class, 'edit'])->name('edit_nota');

    Route::put('/nota/{id}/edit',[NotaController::class, 'update'])->name('update_nota');

    Route::post('/nota', [NotaController::class, 'store'])->name('store_nota');


    Route::get('/transcricao', function () {
        return view('transcricao.new');
    });
    Route::post('/transcricao', [TranscricaoController::class, 'store'])->name('store_transcricao');

    Route::get('/area', [ AreaController::class, 'index'])->name('new_area');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
