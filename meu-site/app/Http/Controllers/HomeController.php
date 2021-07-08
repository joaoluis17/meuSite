<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home ()
    {
        $home = [
            '<p>Muito obrigado por me visitar! Aqui você vai encontrar todos meus links e saber um pouco sobre mim.</p>',
            '<p>Mais abaixo está os meus Lançamentos até hoje. Caso eu tenha esquecido de algum você pode adicionar!</p>',
        ];

        return view('pages.home', [
            'inicio' => $home,
        ]);

    }

    public function albuns () {

        return view('pages.albuns');

    }

    public function store(Request $request)
    {
        $nome = $request->nome;
    }

}
