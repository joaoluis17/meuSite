<?php

namespace App\Http\Controllers;

use App\Album;

class VolumesController extends Controller
{
    public function index(int $albumId)
    {
        $album = Album::find($albumId);
        $volumes = $album->volumes;

        return view('volumes.index', compact('album','volumes'));
    }
}
