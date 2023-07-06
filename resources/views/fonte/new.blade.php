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

            {!! Form::open(['url' => route('store_fonte'), 'method'=> 'POST']) !!}
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div style="display:flex;justify-content: space-between">
                <h1 style="display: inline">Cadastro | <span>Fonte Primária</span></h1>

                <a href="{{ route('dashboard') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> Voltar</a>
            </div>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="NomTitulo">Titulo</label>
                        {{ Form::text('NomTitulo') }}
                    </div>

                    <div class="input-wrapper">
                        <label for="CodCodigo">Código</label>

                        {{ Form::text('CodCodigo', null, ['max' => 100, 'required' => true]) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="DscDescricao">Descrição</label>

                        {{ Form::text('DscDescricao', null, ['max' => 150, 'required' => true]) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="IdcEspecie">Especie</label>

                        {{ Form::text('IdcEspecie', null, ['maxlength' => 4, 'required' => true]) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="NomInstituicaoProdutora">Instituição Produtora</label>

                        {{ Form::text('NomInstituicaoProdutora', null, ['max' => 155, 'required' => true]) }}

                    </div>


                    <div class="input-wrapper">
                        <label for="NomSecao">Seção/Coleção</label>

                        {{ Form::select('fonte-secao', $secoes, null, ['class' => 'dropdown-single']) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="DatDataCronologica">Datação de conteúdo</label>

                        {{ Form::date('DatDataCronologica', null, ['required' => true, 'class'=> 'input-data']) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="DatDataProducao">Datação de produção</label>
                        {{ Form::date('DatDataProducao', null, ['required' => true, 'class'=> 'input-data']) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="link">Link<span>(comece com https://)</span></label>

                        {{ Form::url('link', null, ['max' => 155,'required' => true]) }}
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>Estudos que usam essa fonte primária</legend>

                    <div class="input-wrapper">
                        <label for="estudos-fonte">Lista de estudos cadastrados<span>(Segure Ctrl [ou command] para selecionar multiplas opções)</span></label>

                        {{ Form::select('estudos-fonte', $estudos, null, ['class' => 'dropdown-multiplo', 'multiple' => true])  }}
                    </div>

                </div>
            </fieldset>

        {!! Form::close() !!}
        </form>
        <footer>

            <button
                class="button"
                type="submit"
                onclick="document.forms[0].requestSubmit()"
                form="fonte">
                Salvar fonte
            </button>
        </footer>

    </div>
@endsection
