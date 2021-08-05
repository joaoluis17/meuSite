<?php


namespace App\Services;


use App\{Album, Volume, Faixa};
use Illuminate\Support\Facades\DB;

class RemovedorDeAlbum
{
    public function removerAlbum(int $albumId) : string
    {
        $nome = '';
        DB::transaction(function () use ($albumId, &$nome) {
            $album = Album::find($albumId);
            $nome = $album->nome;

            $this->removerVolume($album);
            $album->delete();
        });

        return $nome;
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
