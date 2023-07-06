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

        {!! Form::open(['url' => route('update_nota', ['id' => $nota->IdeNota]), 'method'=> 'PUT']) !!}

        <div style="display:flex;justify-content: space-between">
            <h1 style="display: inline">Editar | <span>Nota</span></h1>

            <a href="{{ route('dashboard') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> Voltar</a>
        </div>
            <fieldset>
                <div class="fieldset-wrapper">

                    <div class="input-wrapper">
                        <label for="NomEntradaPadrao">Entrada</label>

                        {{ Form::text('NomEntradaPadrao', $nota->NomEntradaPadrao) }}
                    </div>

                    <div class="input-wrapper">
                        <label for="TxtAscepcao">Descrição</label>

                        {{ Form::text('TxtAscepcao', $nota->TxtAscepcao, ['max' => 255]) }}

                    </div>

                    <div class="input-wrapper">
                        <label for="DscClassificacao">Classificação</label>

                        {{ Form::text('DscClassificacao', $nota->DscClassificacao, ['maxlength' => 4, 'class'=> 'input-classificacao']) }}
                    </div>

{{--                    <div class="input-wrapper">--}}
{{--                        <label for="DatNota">Data de produção</label>--}}

{{--                        {{ Form::date('DatNota', $nota->DatNota, ['class'=> 'input-data', 'required'=> true]) }}--}}
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
