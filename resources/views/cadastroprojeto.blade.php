@extends('layouts.layout')

@section('titulo', 'Home')

@section('conteudo')

<script src="/js/editor.js" type="text/javascript"></script>

<script type="text/javascript">

    bkLib.onDomLoaded(nicEditors.allTextAreas);

        function clicou() {
            descricao = nicEditors.findEditor('editor').getContent();
            nome = document.getElementById('nome').value;
            github = document.getElementById('github').value;
            link_da_aplicacao = document.getElementById('link').value;
            imagem = document.getElementById('imagem').value;

            var url = "http://localhost:8000/cadadatra/projeto/?"
            + "descricao=" + descricao + "&"
            + "nome=" + nome + "&"
            + "github=" + github + "&"
            + "link_da_aplicacao=" + link_da_aplicacao + "&"
            + "imagem=" + imagem
            ;

            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", url, false);
            xhttp.send();

            console.log(xhttp)
        }

</script>



    <main class="content" id="cadastro-projeto">

        <h2>Novo Projeto:</h2>

        <form action="{{--{{ route('cadastra-projeto }}--}}" method="POST" id="projeto">

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
            <label for="imagem">Link no GitHub:</label> <br>
            <input type="url" name="imagem" id="imagem">


        </form>

        <div style="display:block;">
            
            <label for="editor">Descrição:</label><br>

            <textarea name="descricao" id="editor"
            ></textarea>

            <button onclick="clicou()">Publicar</button>

        </div>
        



    </main>

@endsection