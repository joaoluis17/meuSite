<?php

namespace App\Http\Controllers;

use App\album;

class VolumesController extends Controller
{
    public function index (int $albumId)
    {
        $album = album::find($albumId);
        $volumes = $album->volumes;

        return view('volumes.index', compact('album','volumes'));
    }
}
