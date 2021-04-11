<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Put your description here.">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title> @yield('titulo') - {{ config('app.name') }} </title>
</head>
<body>

    

    <main>
        <nav>

            <section id="menu">

                <a href="{{ route('home') }}"><img class="icones_menu" src="{{ asset('img/home.png') }}" alt=""></a>
                <a href="{{ route('contato') }}"><img class="icones_menu" src="{{ asset('img/contato.png') }}" alt=""></a>
                <a href="{{ route('projetos') }}"><img class="icones_menu" src="{{ asset('img/projetos.png') }}" alt=""></a>

            </section>

            <section>

                <a href="{{ route('home') }}"><img class="icones_menu" src="{{ asset('img/logo.png') }}" alt=""></a>

            </section>

        </nav>

        @yield('conteudo')

        <footer>TExte</footer>

    </main>

    
    
</body>
</html>