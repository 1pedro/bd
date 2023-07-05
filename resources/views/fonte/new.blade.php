@extends('layouts.custom')

@section('title', 'Cadastro Fonte')
@section('style')
    @vite('resources/css/new.css')
@endsection
@section('content')
    <div id="div-logo">
        <img src="{{asset("img/logo-ufba-compacto.png")}}">
    </div>
    <div class="page">
        <form id="fonte" method="POST" action="{{ route('store_fonte') }}">
            @csrf
            <h1>Cadastro | <span>Fonte Primária</span></h1>
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
                        <label for="CodCodigo">Código</label>
                        <input
                            type="text"
                            id="CodCodigo"
                            required
                            maxlength="100"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="DscDescricao">Descrição</label>
                        <textarea id="DscDescricao" required maxlength="150"></textarea>
                    </div>

                    <div class="input-wrapper">
                        <label for="IdeEspecie">Especie</label>
                        <input
                            type="text"
                            id="IdeEspecie"
                            required
                            maxlength="100"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="NomInstituicaoProdutora">Instituição Produtora</label>
                        <input
                            type="text"
                            id="NomInstituicaoProdutora"
                            required
                            maxlength="155"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="NomInstituicaoCustodiadora">Instituição Custodiadora</label>
                        <input
                            type="text"
                            id="NomInstituicaoCustodiadora"
                            required
                            maxlength="100"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="NomSecao">Seção/Coleção</label>
                        <input
                            type="text"
                            id="NomSecao"
                            required
                            maxlength="155"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="DatFonte">Datação de conteúdo</label>
                        <input type="date" id="DatFonte" required class="input-data"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="DatProducao">Datação de produção</label>
                        <input type="date" id="DatProducao" required class="input-data"/>
                    </div>

                    <div class="input-wrapper">
                        <label for="link">Link<span>(comece com https://)</span></label>
                        <input type="url" id="link" maxlength="155"/>
                    </div>


                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Estudos que usam essa fonte primária</legend>

                    <div class="input-wrapper">
                        <label for="estudos-fonte">Lista de estudos cadastrados<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>
                        <select id="estudos-fonte" multiple size="1" class="dropdown-multiplo" required>
                            @foreach($estudos as $estudo)
                                <option value="{{$estudo->IdeEstudo}}">{{$estudo->NomNome}}</option>
                            @endforeach
                            <!--Opções serão preenchidas pelo PHP com as informações sobre os estudos cadastrados no banco-->
                        </select>
                    </div>

                </div>
            </fieldset>

        </form>
        <footer>
            <button
                class="button"
                type="submit"
            form="fonte">
                Salvar fonte
            </button>
        </footer>

    </div>
@endsection
