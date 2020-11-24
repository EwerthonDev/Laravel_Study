<?php 

namespace App\Services;

use App\Http\Models\Serie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CriadorDeSeries
{
    public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $qtdEpisodios): Serie
    {   
        DB::beginTransaction();
        $serie = Serie::create(['nome' => $nomeSerie]);
        $this->criaTemporada($qtdTemporadas, $qtdEpisodios, $serie);
        DB::commit();
        
        return $serie;
    }


    public function criaTemporada($qtdTemporadas, $qtdEpisodios, $serie){
        for ($i = 1; $i <= $qtdTemporadas; $i++ ) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criaEpisodio($temporada, $qtdEpisodios);
        }
    }

    public function criaEpisodio($temporada, $qtdEpisodios){
        for ($j = 1; $j <= $qtdEpisodios; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
    }
}