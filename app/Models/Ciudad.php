<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    public function vuelo(){
        return $this->hasMany(Vuelo::class);
    }

    public function aerolinea()
    {
        return $this->belongsToMany(Aerolinea::class,'aerolinea_ciudads','ciudad_id','aerolinea_id')->withTimestamps();
    }
}
