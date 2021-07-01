<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Rubro;
use Illuminate\Http\Request;

class RubrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubro = Rubro::all();
        return "hola estamos en rubros";
        return $rubro;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rubro= Rubro::create($request -> all());
        return $rubro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rubros  $rubros
     * @return \Illuminate\Http\Response
     */
}