<?php


namespace App\Http\Controllers;
use App\Http\Requests\AlbunsFormRequest;
use App\album;
use Illuminate\Http\Request;

class AlbunsController extends Controller
{
    public function index(Request $request)
    {
        $albuns = album::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('pages.index', compact('albuns', 'mensagem'));
    }

    public function create() {

        return view('pages.albuns');

    }

    public function store(AlbunsFormRequest $request)
    {
        $album = Album::create($request->all());
        $request->session()->flash('mensagem', "Álbum {$album->id} criado com sucesso {$album->nome}");

        return redirect()->route('listar_albuns');
    }

    public function destroy(Request $request)
    {
        Album::destroy($request->id);
        $request->session()->flash('mensagem', "Álbum removido com sucesso");

        return redirect()->route('listar_albuns');
    }

}
