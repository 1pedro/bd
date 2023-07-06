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
            <h1 style="display: inline">Cadastro | <span>Area</span></h1>

            <a href="{{ route('dashboard') }}" class="font-bold text-white p-2 bg-green-500 inline-block rounded-md"> Voltar</a>
        </div>
        <fieldset>
            <div class="fieldset-wrapper">

                <div class="input-wrapper">
                    <label for="CodArea">Código</label>
                    {{ Form::text('CodArea', null, ['max' => 100, 'required' => true]) }}
                </div>

                <div class="input-wrapper">
                    <label for="NomNome">Titulo</label>
                    {{ Form::text('NomNome') }}
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
                Salvar Area
            </button>
        </footer>

    </div>
@endsection
