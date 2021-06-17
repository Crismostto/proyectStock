<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    use HasFactory;

    
function Articulo(){
    return $this->hasMany('App\Models\Articulos');
}

}
