@extends('layouts.custom')
@section('title', 'Login')
@section('style')
    @vite('resources/css/login.css')
@endsection
@section('content')
    <header>
        <img src="{{asset("img/logo-ufba.png")}}"/>
    </header>

    <main>
        <h1>Catálogo de fontes primárias em uso - Pós-Graduação UFBA</h1>
        <div id="login">
            <div id="info">
                <p>Credenciais cadastradas pelo Admin</p>
            </div>
            <form>
                <div class="wrapper">
                    <label for="input-email">Email</label>
                    <input name="email" type="email" id="input-email"></input>
                </div>
                <div class="wrapper">
                    <label for="event-info">Senha</label>
                    <input name="senha" type="password" id="input-senha"></input>
                </div>
                <button>Acessar</button>
            </form>
        </div>
    </main>

@endsection
