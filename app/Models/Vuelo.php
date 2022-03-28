<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    public function origen(){
        return $this->belongsTo(Ciudad::class);
    }

    public function destino(){
        return $this->belongsTo(Ciudad::class);
    }

    public function aerolinea(){
        return $this->belongsTo(Aerolinea::class);
    }

}
