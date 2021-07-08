@extends('layout')

@section('cabecalho')
Lançamentos
@endsection

@section('conteudo')
    <div class="container">
        <div class="titulo">
            <h1>Meus Lançamentos</h1>
            <ul>Álbuns
                <li>Acorrentado</li>
                <li>Insanity Love</li>
                <li>End Game</li>
                <li>Her</li>
                <li>Somebody Told Me</li>
            </ul>
        </div>

        <form method="post">
            @csrf
            <div class="input-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control">
            </div>
            <button class="btn btn-primary" name="Nome">Adicionar</button>
        </form>
    </div>
@endsection
