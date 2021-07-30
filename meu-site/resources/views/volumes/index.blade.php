@extends('layout')

@section('cabecalho')
    Volumes de {{$album->nome}}
@endsection

@section('conteudo')
    <ul class="list-group">
        @foreach ($volumes as $volume)
            <li class="list-group-item">Volume {{ $volume->numero }}</li>
        @endforeach
    </ul>
@endsection
