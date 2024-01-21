<?php

namespace App\Http\Controllers;

use App\Models\LocationVoiture;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserve1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation=[
            'adresse'=>$request->adresse,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'maison'=>$request->maison,
            'societe'=>$request->societe,
            'date_location'=>$request->date_location,
            'heure_location'=>$request->heure_location,
            'date_location_back'=>$request->date_location_back,
            'heure_location_back'=>$request->heure_location_back,
            'card'=>'photo',
            'car_id'=>2,
            'user_id'=>1

        ];

        LocationVoiture::create($reservation);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocationVoiture  $locationVoiture
     * @return \Illuminate\Http\Response
     */
    public function show(LocationVoiture $locationVoiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocationVoiture  $locationVoiture
     * @return \Illuminate\Http\Response
     */
    public function edit(LocationVoiture $locationVoiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocationVoiture  $locationVoiture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocationVoiture $locationVoiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocationVoiture  $locationVoiture
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocationVoiture $locationVoiture)
    {
        //
    }
}
