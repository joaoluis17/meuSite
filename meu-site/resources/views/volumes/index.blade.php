@extends('layout')

@section('cabecalho')
    Volume de {{ $album->nome }}
@endsection

@section('conteudo')
    <ul class="list-group">
        @foreach($volumes as $volume)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="/volumes/{{ $volume->id }}">
                    Volume {{ $volume->numero }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
