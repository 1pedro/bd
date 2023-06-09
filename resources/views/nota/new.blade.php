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

        {!! Form::open(['url' => route('store_nota'), 'method'=> 'POST']) !!}

        <div style="display:flex;justify-content: space-between">
            <h1 style="display: inline">Cadastro | <span>Nota</span></h1>

            <a href="{{ route('dashboard') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> Voltar</a>
        </div>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="NomEntradaPadrao">Entrada</label>

                        {{ Form::text('NomEntradaPadrao') }}
                    </div>

                    <div class="input-wrapper">
                        <label for="TxtAscepcao">Descrição</label>

                        {{ Form::text('TxtAscepcao', null, ['max' => 255]) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="IdcClassificacao">Classificação</label>

                        {{ Form::text('DscClassificacao', null, ['maxlength' => 4, 'class'=> 'input-classificacao']) }}
                    </div>

{{--                    <div class="input-wrapper">--}}
{{--                        <label for="DatNota">Data de produção</label>--}}

{{--                        {{ Form::date('DatNota', null, ['class'=> 'input-data', 'required'=> true]) }}--}}
{{--                    </div>--}}

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
