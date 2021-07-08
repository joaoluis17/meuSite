@extends('layout')

@section('cabecalho')
    Home
@endsection

@section('conteudo')
    <div class="container">
        <div class="titulo">
            <h1>Bem Vindo!</h1>
        </div>

        <ul>
            <?php foreach ($inicio as $home): ?>
                <p><?= $home; ?></p>
            <?php endforeach; ?>
        </ul>

        <form method="post">
            <a href= "/home/albuns" class="btn btn-dark mb-2">Adicionar</a>
        </form>
    </div>
@endsection
