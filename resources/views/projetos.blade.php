@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

    <main id="projetos">

        <h2>Meus Projetos:</h2>

        @if( $projetos )
            <section>
                @foreach( $projetos as $projeto)
                    <img src="{{ $projeto->imagem }}" alt="">
                    {{ $projeto->nome }}
                    <?php echo $projeto->descricao; ?>
                    {{ $projeto->link_da_aplicacao }}
                    {{ $projeto->github  }}
                    
                    {{ $projeto->id }}
                @endforeach
            </section>
        @else

            <h3>nenhum projeto cadastrado</h3>

        @endif

    </main>

@endsection