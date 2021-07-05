<?php


namespace App\Http\Controllers;


class LinksController extends Controller
{
    public function listarLinks () {
        $links = [
            'Facebook',
            'Instagram',
            'Spotify',
            'YouTube'
        ];

        $html = "<ul>";
        foreach ($links as $link){
            $html .="<li>$link</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
