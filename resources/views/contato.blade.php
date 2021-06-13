@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

    <main id="contato">

        <section>

            <h2>Me encontre nas redes:</h2>

                <a href="https://www.linkedin.com/in/luizemanoel/" target="__blank"><img src="{{ asset('/img/linkedin.png') }}" alt="Link para Linkedin"> Linkedin </a>
                <a href="https://github.com/luizemanoelponce" target="__blank"><img src="{{ asset('/img/github.png') }}" alt="Link para Github"> GitHub</a>

            <h2>ou email:</h2>

                <a href="mailto:luizemanoelponce@yahoo.com.br" target="__blank"><img src="{{ asset('img/email.png') }}" alt="Endereço de email"> Email </a>

        </section>

    </main>

@endsection