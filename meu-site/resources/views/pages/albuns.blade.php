@extends('layout')

@section('cabecalho')
    Adicionar Album
@endsection

@section('conteudo')
    @include('erros', ['errors' => $errors])

    <form method="post">
        @csrf
        <div class="row">
            <div class="col col-8">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="col col-2">
                <label for="num_volumes">Nº Volumes</label>
                <input type="number" class="form-control" name="num_volumes" id="num_volumes">
            </div>

            <div class="col col-2">
                <label for="num_faixas">Nº Faixas</label>
                <input type="number" class="form-control" name="num_faixas" id="num_faixas">
            </div>
        </div>

        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
