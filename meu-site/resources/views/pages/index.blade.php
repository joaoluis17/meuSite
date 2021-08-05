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

    @auth
        <a href="{{ route('form_criar_album') }}" class="btn btn-dark mb-2">Adicionar</a>
    @endauth

    <ul class="list-group">
        @foreach($albuns as $album)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span id="nome-album-{{ $album->id }}">{{ $album->nome }}</span>

                <div class="input-group w-50" hidden id="input-nome-album-{{ $album->id }}">
                    <input type="text" class="form-control" value="{{ $album->nome }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" onclick="editarAlbum({{ $album->id }})">
                            <i class="fas fa-check"></i>
                        </button>
                        @csrf
                    </div>
                </div>

                <span class="d-flex">
            @auth
                        <button class="btn btn-info btn-sm mr-1" onclick="toggleInput({{ $album->id }})">
                <i class="fas fa-edit"></i>
            </button>
                    @endauth
            <a href="albuns/{{ $album->id }}/volumes" class="btn btn-info btn-sm mr-1">
                <i class="fas fa-external-link-alt"></i>
            </a>
            @auth
                        <form method="post" action="/albuns/{{ $album->id }}"
                              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($album->nome) }}?')">
                @csrf
                            @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    <i class="far fa-trash-alt"></i>
                </button>
            </form>
                    @endauth
        </span>
            </li>
        @endforeach
    </ul>
@endsection
