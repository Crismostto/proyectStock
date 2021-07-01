<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

function DetalleComprobante(){
    return $this->hasMany('App\Models\DetalleComprobante');

} 

function Cliente(){
    return $this->belongsTo('App\Models\Cliente');

}
}
