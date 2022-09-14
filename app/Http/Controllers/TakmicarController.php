<?php

namespace App\Http\Controllers;

use App\Http\Resources\TakmicarResurs;
use App\Models\Takmicar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TakmicarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $takmicari = DB::table('takmicars')->get();

        return TakmicarResurs::collection($takmicari);
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
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function show(Takmicar $takmicar)
    {
        return new TakmicarResurs($takmicar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function edit(Takmicar $takmicar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Takmicar $takmicar)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'godine' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $takmicar->ime = $request->ime;
        $takmicar->prezime = $request->prezime;
        $takmicar->godine = $request->godine;
        $takmicar->save();

        return response()->json('Takmicar je azuriran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Takmicar  $takmicar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Takmicar $takmicar)
    {
        //
    }
}
