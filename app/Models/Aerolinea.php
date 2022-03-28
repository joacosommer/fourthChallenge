<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolinea extends Model
{
    use HasFactory;

    public function vuelo(){
        return $this->hasMany(Vuelo::class);
    }

    public function ciudad()
    {
        return $this->belongsToMany(Ciudad::class,'aerolinea_ciudads','aerolinea_id', 'ciudad_id')->withTimestamps();
    }
}
