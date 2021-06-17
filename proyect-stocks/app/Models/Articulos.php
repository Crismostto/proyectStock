<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;

    
function Rubro(){
    return $this->belongsTo('App\Models\Rubro');
   
   }

function DetalleComprobante(){
    
    return $this->hasMany('App\Models\DetalleComprobante');
}

}
