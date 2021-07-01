<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;

protected $fillable = ['id_rubro','nombre','precio','cant_max','cant_min','fecha-vencimiento'];    

function Rubro(){
    return $this->belongsTo('App\Models\Rubro');
   
}

function DetalleComprobante(){
    return $this->hasMany('App\Models\DetalleComprobante');

}
/* function DetalleComprobante(){
    
    return $this->hasMany('App\Models\DetalleComprobante');
}
*/

}
