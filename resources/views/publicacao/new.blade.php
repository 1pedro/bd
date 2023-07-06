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
        {!! Form::open(['url' => route('store_publicacao'), 'method'=> 'POST']) !!}

        <div style="display:flex;justify-content: space-between">
            <h1 style="display: inline">Cadastro | <span>Publicação</span></h1>

            <a href="{{ route('dashboard') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> Voltar</a>
        </div>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="NomTitulo">Titulo</label>

                        {{ Form::text('NomTitulo', null, ['maxlength' => 155, 'required' => true]) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="NomReferencia">Referência</label>

                        {{ Form::text('NomReferencia', null, ['maxlength' => 150, 'required' => true]) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="IdcVeiculo">Veiculo</label>
                        {{ Form::text('IdcVeiculo', null, ['maxlength' => 4, 'required' => true]) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="DatPublicacao">Data de publicação</label>

                        {{ Form::date('DatPublicacao', null, ['required' => true, 'class' => 'input-data']) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="NomLink">Link <span>(Apenas caso seja uma Publicação online)</span></label>

                        {{ Form::url('NomLink', null, ['maxlength' => 150]) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="CodDoi">Doi: <span>(Apenas caso seja uma Publicação online)</span></label>

                        {{ Form::url('CodDoi', null, ['maxlength' => 55]) }}

                    </div>


                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Autor(es)</legend>

                    <div class="input-wrapper">
                        <label for="publicacao-pesquisador">Lista de pesquisadores cadastrados<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>

                        {{ Form::select('publicacao-pesquisador', $pesquisadores, null, ['class' => 'dropdown-multiplo', 'required' => true, 'multiple' => true]) }}

                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Fontes primárias utilizadas</legend>

                    <div class="input-wrapper">
                        <label for="publicacao-fonte">Lista de fontes primárias cadastradas<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>
                        {{ Form::select('Publicacao-fonte', $fontes, null, ['class' => 'dropdown-multiplo', 'required' => true, 'multiple' => true]) }}
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Estudo</legend>

                    <div class="input-wrapper">
                        <label for="publicacao-estudo">Lista de estudos cadastrados</label>
                        {{ Form::select('Publicacao-estudo', $estudos, null, ['class' => 'dropdown-single', 'required' => true, 'placeholder' => 'Selecione um Estudo']) }}
                    </div>

                </div>
            </fieldset>
        {{ Form::close() }}
        <footer>
            <button
                class="button"
                type="submit"
                onclick="document.forms[0].requestSubmit()"
                form="fonte">
                Salvar Nota
            </button>
        </footer>
    </div>
@endsection
