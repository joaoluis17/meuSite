@extends('layout')

@section('cabecalho')
Home
@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href= "{{ route('form_criar_album') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">

        @foreach ($albuns as $album)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $album->nome }}

                <span class="d-flex">
                    <a href="/pages/{{$album->id}}/volumes" class="btn btn-danger btn-sm mr-1">
                        <i class="fas fa-link"></i>
                    </a>
                    <form method="post" action="/pages/{{ $album->id }}"
                          onsubmit="return confirm('Deseja remover {{ addslashes($album->nome) }} ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
