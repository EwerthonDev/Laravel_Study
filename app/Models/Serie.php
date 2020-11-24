<?php

namespace App\Http\Models;

use App\Models\Temporada;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome'];

    public function temporadas(){
        return $this->HasMany(Temporada::class);
    }
}