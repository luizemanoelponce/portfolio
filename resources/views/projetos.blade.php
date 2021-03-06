@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

    <h1 id="h1projts">Meus Projetos:</h1>

    <main id="projetos">

        @foreach( $projetos as $projeto)

            <section>

                <div id="img_projetos">
                    <img src="{{ $projeto->imagem }}" alt="">
                </div>

                <div>

                    <h2>{{ $projeto->nome }}</h2>

                    <div id="descricao">
                        <?php echo $projeto->descricao; ?>
                    </div>
                    
                    <div id="link_aplicacao">

                        <a href="{{ $projeto->link_da_aplicacao }}" target="__blank">Ir para o projeto</a>
                        <a href="projeto/{{ $projeto->id }}" target="__blank">Mais detalhes</a>

                    </div>
                    
                </div>
                
                
                
            </section>

        @endforeach

    </main>

@endsection