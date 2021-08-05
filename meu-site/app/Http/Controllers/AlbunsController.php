<?php


namespace App\Http\Controllers;
use App\Faixa;
use App\Http\Requests\AlbunsFormRequest;
use App\Album;
use App\Services\CriadorDeAlbum;
use App\Services\RemovedorDeAlbum;
use App\Volume;
use Illuminate\Http\Request;

class AlbunsController extends Controller
{
    public function index(Request $request)
    {
        $albuns = Album::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('pages.index', compact('albuns', 'mensagem'));
    }

    public function create() {

        return view('pages.albuns');

    }

    public function store(AlbunsFormRequest $request, CriadorDeAlbum $criadorDeAlbum)
    {
        $album = $criadorDeAlbum->criarAlbum($request->nome, $request->numVolumes, $request->numFaixas);

        $request->session()->flash('mensagem', "Álbum {$album->id} criado com sucesso {$album->nome}");

        return redirect()->route('listar_albuns');
    }

    public function destroy(Request $request, RemovedorDeAlbum $removedorDeAlbum)
    {
        $nomeAlbum = $removedorDeAlbum->removerAlbum($request->id);
        $request->session()->flash('mensagem', "Álbum $nomeAlbum removido com sucesso");

        return redirect()->route('listar_albuns');
    }

    public function editaNome(int $id, Request $request)
    {
        $album = Album::find($id);
        $novoNome = $request->nome;
        $album->nome = $novoNome;
        $album->save();
    }

}
