<?php

namespace App\Http\Controllers;

use App\Http\Resources\KvizResurs;
use App\Models\Kviz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KvizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kvizovi = DB::table('kvizs')->get();

        return KvizResurs::collection($kvizovi);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kviz  $kviz
     * @return \Illuminate\Http\Response
     */
    public function show(Kviz $kviz)
    {
        return new KvizResurs($kviz);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kviz  $kviz
     * @return \Illuminate\Http\Response
     */
    public function edit(Kviz $kviz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kviz  $kviz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kviz $kviz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kviz  $kviz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kviz $kviz)
    {
        $kviz->delete();

        return response()->json('Kviz je obrisan');
    }
}
