@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

    <main class="content" id="home">

        <section>

            <div><img src="{{ asset('img/perfil.jpg') }}" alt=""></div>
            <div>
                <small>Olá, meu nome é</small>
                <h1>Luiz Emanoel</h1>
                <h2>Eu crio soluções para web</h2>
            </div>

        </section>

        <section>

            <div>
                <p>
                    Vivo em Curitiba/PR, sou estudante de Análise e Desenvolvimento de Sistemas pela Estácio de Sá e Desenvolverdor Web
                </p>
            </div>

        </section>

        <section>

            <a href="{{ route('contato') }}">Fale comigo</a>
            <a href="{{ route('projetos') }}">Conheça meu trabalho</a>

        </section>
    </main>

@endsection