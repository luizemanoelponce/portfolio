@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

    <main id="projeto">

        @if( $projeto )

            <section>

                <h1>{{ $projeto->nome }}</h1>

                <div id="img_projeto">
                    <img src="{{ $projeto->imagem }}" alt="">
                </div>
                <div>

                    <article>
                        <?php echo $projeto->descricao; ?>
                    </article>
                    
                    <div id="link_aplicacao_pg_projeto">
                        <a href="{{ $projeto->link_da_aplicacao }}" target="__blank">Ir para o projeto</a>
                        <a href="{{ $projeto->github }}" target="__blank">Ir para o github</a>
                    </div>
                    
                </div>
                
            </section>

        @else

            <h3>nenhum projeto cadastrado</h3>

        @endif

    </main>

@endsection