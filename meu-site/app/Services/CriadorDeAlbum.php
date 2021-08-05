<?php


namespace App\Services;

use App\Album;
use Illuminate\Support\Facades\DB;

class CriadorDeAlbum
{
    public function criarAlbum(string $nome, int $numVolumes, int $numFaixas) : Album
    {
        DB::beginTransaction();
        $album = Album::create(['nome' => $nome]);
        $this->criaVolumes($numVolumes, $numFaixas, $album);
        DB::commit();

        return $album;
    }

    private function criaVolumes($numVolumes, $numFaixas, Album $album): void
    {
        for ($i = 1; $i <= $numVolumes; $i++) {
            $volume = $album->volumes()->create(['numero' => $i]);

            $this->criaFaixas($numFaixas, $volume);
        }
    }

    private function criaFaixas($numFaixas, $volume): void
    {
        for ($j = 1; $j <= $numFaixas; $j++) {
            $volume->faixas()->create(['numero' => $j]);

        }
    }


}
