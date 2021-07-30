<?php


namespace App\Services;


use App\Album;
use App\Faixa;
use App\Volume;
use Illuminate\Support\Facades\DB;

class RemovedorDeAlbum
{
    public function removerAlbum(int $albumId) : string
    {
        $nomeAlbum = '';
        DB::transaction(function () use ($albumId, &$nomeAlbum) {
            $album = Album::find($albumId);
            $nomeAlbum = $album->nome;

            $this->removerVolume($album);
            $album->delete();
        });

        return $nomeAlbum;
    }

    private function removerVolume(Album $album): void
    {
        $album->volume->each(function (Volume $volume) {
            $this->removerFaixas($volume);
            $volume->delete();
        });
    }

    /**
     * @param Volume $volume
     * @throws \Exception
     */
    private function removerFaixas(Volume $volume): void
    {
        $volume->faixa->each(function (Faixa $faixa) {
            $faixa->delete();
        });
    }
}
