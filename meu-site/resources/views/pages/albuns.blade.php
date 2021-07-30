@extends('layout')

@section('cabecalho')
    Adicionar Álbum
@endsection

@section('conteudo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf
        <div class="row">
            <div class="col-col-8 mr-4">
                <label for="nome" class="'">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="col-col-2 mr-4">
                <label for="volume" class="'">Volume Número:</label>
                <input type="number" class="form-control" name="volume" id="volume">
            </div>

            <div class="col-col-2">
                <label for="faixa" class="'">Faixas</label>
                <input type="number" class="form-control" name="faixa" id="faixa">
            </div>
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
