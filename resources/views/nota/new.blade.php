@extends('layouts.custom')
@section('title', 'Cadastro Nota')
@section('style')
    @vite('resources/css/new.css')
@endsection
@section('content')
    <div id="div-logo">
        <img src="{{asset("img/logo-ufba-compacto.png")}}">
    </div>
    <div class="page">
        <form id="my-form">
            <h1>Cadastro | <span>Nota</span></h1>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="NomEntradaPadrao">Entrada</label>
                        <input
                            type="text"
                            id="NomEntradaPadrao"
                            required
                            maxlength="55"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="TxtAscepcao">Descrição</label>
                        <textarea id="TxtAscepcao" required maxlength="255"></textarea>
                    </div>

                    <div class="input-wrapper">
                        <label for="IdcClassificacao">Classificação</label>
                        <input
                            type="text"
                            id="IdcClassificacao"
                            required
                            maxlength="4"
                            class="input-classificacao"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="DatNota">Data de produção</label>
                        <input type="date" id="DatNota" required class="input-data"/>
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Transcrição referência</legend>

                    <div class="input-wrapper">
                        <label for="nota-transcricao">Lista de transcrições cadastradas</label>
                        <select id="nota-transcricao" class="dropdown-single">
                            <option value="live">Preencher opções</option>

                        </select>
                    </div>

                </div>
            </fieldset>
        </form>
        <footer>
            <button
                class="button"
                form="my-form">
                Salvar nota
            </button>
        </footer>
    </div>
@endsection
