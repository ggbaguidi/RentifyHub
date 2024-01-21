<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\LocationVoitureRequest;
use App\Models\LocationVoiture;

class LocationVoitureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['vehiculesALouer','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allReservedUsers = LocationVoiture::all();

        return view('allReservation.allReservation')->with('allReservedUsers',$allReservedUsers);
    }


    public function  vehiculesALouer()
    {
        $nosVoitures = Car::all();
        return view('gammeAlouer')->with('allCars', $nosVoitures);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentVoiture = Car::find($id);
        return view('voitureDetails')->with('currentVoiture', $currentVoiture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voiture_reserve = Car::find($id);
        return view('reserve1')->with('voiture_reserve', $voiture_reserve);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocationVoitureRequest $request, $id)
    {
        $car_id = $id;

        if ($request->hasFile('card')) {
            $file = $request->file('card');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->storeAs('public/images_cars/persons', $filename);
        } else {
            return back()->with(
                'reservedFailledMessage',
                'Votre réservation n\'a pas pu être faite !',
            );
        }

        $reservationVoiture = [
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'maison' => $request->maison,
            'societe' => $request->societe,
            'date_location' => $request->date_location,
            'heure_location' => $request->heure_location,
            'date_location_back' => $request->date_location_back,
            'heure_location_back' => $request->heure_location_back,
            'card' => $filename,
            'car_id' => $car_id,
            'user_id' => auth()->user()->id,
        ];

        LocationVoiture::create($reservationVoiture);
        return back()->with('reservedMessage', 'Votre réservation a été faite avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
