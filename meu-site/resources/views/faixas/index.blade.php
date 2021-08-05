@extends('layout')

@section('cabecalho')
    Faixas
@endsection

@section('conteudo')
    @include('mensagem', ['mensagem' => $mensagem])

    <form action="/volumes/{{ $volumeId }}/faixas/ouvir" method="post">
        @csrf
        <ul class="list-group">
            @foreach($faixas as $faixa)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
@endsection
