@extends('layouts.custom')

@section('title', 'Cadastro Transcrição')
@section('style')
    @vite('resources/css/new.css')
@endsection
@section('content')
    <div id="div-logo">
        <img src="{{asset("img/logo-ufba-compacto.png")}}">
    </div>
    <div class="page">
        <form id="my-form">
            <h1>Cadastro | <span>Transcrição</span></h1>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="TxtTranscricao">Conteudo</label>
                        <textarea id="TxtTranscricao" maxlength="1000"></textarea>
                    </div>

                    <div class="input-wrapper">
                        <label for="Tipo">Tipo</label>
                        <input
                            type="text"
                            id="Tipo"
                            required
                            maxlength="50"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="DatTraNot">Data de criação</label>
                        <input type="date" id="DatTraNot" required class="input-data"/>
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Critérios</legend>

                    <div class="input-wrapper">
                        <label for="transcricao-criterio">Lista de critérios cadastrados<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>
                        <select id="transcricao-criterio" multiple size="1" class="dropdown-multiplo" required>
                            <option value="live">Preencher opções</option>
                            <!--Opções serão preenchidas pelo PHP com as informações sobre os estudos cadastrados no banco-->
                        </select>
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Fonte primária transcrita</legend>

                    <div class="input-wrapper">
                        <label for="transcricao-fonte">Lista de fontes primárias cadastradas</label>
                        <select id="transcricao-fonte" class="dropdown-single">
                            <option value="live">Preencher opções</option>
                            <!--Opções serão preenchidas pelo PHP com as informações sobre os estudos cadastrados no banco-->
                        </select>
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Estudo vigente</legend>

                    <div class="input-wrapper">
                        <label for="transcricao-estudo">Lista de estudos cadastrados</label>
                        <select id="transcricao-estudo" class="dropdown-single">
                            <option value="live">Preencher opções</option>
                            <!--Opções serão preenchidas pelo PHP com as informações sobre os estudos cadastrados no banco-->
                        </select>
                    </div>

                </div>
            </fieldset>
        </form>
        <footer>
            <button
                class="button"
                form="my-form">
                Salvar transcrição
            </button>
        </footer>
    </div>
@endsection
