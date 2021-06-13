@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

</script>



    <main class="content" id="cadastro-projeto">

        <h2>Novo Projeto:</h2>

        <form action="{{ route('cadastra-projeto') }}" method="post" id="projeto">

            @csrf
            
            <label for="nome">Título do Projeto:</label> <br>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="link">Link do Projeto:</label> <br>
            <input type="url" name="link_da_aplicacao" id="link">
            <br>
            <label for="github">Link no GitHub:</label> <br>
            <input type="url" name="github" id="github">
            <br>
            <label for="imagem">Link da Imagem:</label> <br>
            <input type="url" name="imagem" id="imagem">
            <br><br>
            <label for="editor">Descrição:</label><br>
            
            <textarea name="descricao" id="editor"></textarea>

            <button action="submit">Publicar</button>

        </form>

    </main>

@endsection