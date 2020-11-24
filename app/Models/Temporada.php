<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];

    public function episodios(){
        return $this->hasMany(Episodio::class);
    }

    public function serie(){
        return $this->belongsTo(Serie::class);
    }

    public function recuperaEpisodiosAssistidos(): Collection
    {
        return $this->episodios->filter(function (Episodio $episodio){
            return $episodio->assistido;
        });
    }
}
