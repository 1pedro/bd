@extends('layouts.custom')

@section('title', 'Cadastro Publicação')
@section('style')
    @vite('resources/css/new.css')
@endsection
@section('content')
    <div id="div-logo">
        <img src="{{asset("img/logo-ufba-compacto.png")}}">
    </div>
    <div class="page">
        <form id="my-form">
            <h1>Cadastro | <span>Publicação</span></h1>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="NomTitulo">Titulo</label>
                        <input
                            type="text"
                            id="NomTitulo"
                            required
                            maxlength="155"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="NomReferencia">Referência</label>
                        <input
                            type="text"
                            id="NomReferencia"
                            required
                            maxlength="150"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="IdcVeiculo">Veiculo</label>
                        <input
                            type="text"
                            id="IdcVeiculo"
                            required
                            maxlength="50"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="DatPublicacao">Data de publicação</label>
                        <input type="date" id="DatPublicacao" required class="input-data"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="NomLink">Link <span>(Apenas caso seja uma Publicação online)</span></label>
                        <input type="url" id="NomLink" maxlength="150"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="CodDoi">Doi: <span>(Apenas caso seja uma Publicação online)</span></label>
                        <input
                            type="text"
                            id="CodDoi"
                            maxlength="55"/>
                    </div>


                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Autor(es)</legend>

                    <div class="input-wrapper">
                        <label for="publicacao-pesquisador">Lista de pesquisadores cadastrados<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>
                        <select id="publicacao-pesquisador" multiple size="1" class="dropdown-multiplo" required>
                            <option value="live">Preencher opções</option>
                            <!--Opções serão preenchidas pelo PHP com as informações sobre os estudos cadastrados no banco-->
                        </select>
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Fontes primárias utilizadas</legend>

                    <div class="input-wrapper">
                        <label for="publicacao-fonte">Lista de fontes primárias cadastradas<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>
                        <select id="publicacao-fonte" multiple size="1" class="dropdown-multiplo" required>
                            <option value="live">Preencher opções</option>
                            <!--Opções serão preenchidas pelo PHP com as informações sobre os estudos cadastrados no banco-->
                        </select>
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Estudo</legend>

                    <div class="input-wrapper">
                        <label for="publicacao-estudo">Lista de estudos cadastrados</label>
                        <select id="publicacao-estudo" class="dropdown-single">
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
                Salvar publicação
            </button>
        </footer>
    </div>
@endsection
