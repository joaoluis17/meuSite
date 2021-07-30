<?php


namespace App\Services;

use App\Album;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Support\Facades\DB;

class CriadorDeAlbum
{
    public function criarAlbum(string $nome, int $numVolumes, int $numFaixas) : Album
    {
        DB::beginTransaction();
        $album = Album::create(['nome' => $nome]);
        $this->criaVolumes($numVolumes, $album, $numFaixas);
        DB::commit();

        return $album;
    }

    public function criaVolumes(int $numVolumes, $album, int $numFaixas): void
    {
        for ($i = 1; $i <= $numVolumes; $i++) {
            $volume = $album->volumes()->create(['numero' => $i]);

            for ($j = 1; $j <= $numFaixas; $j++) {
                $volume->faixas()->create(['numero' => $j]);

            }
        }
    }
}
