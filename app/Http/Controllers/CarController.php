<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\View\View;

class CarController extends Controller
{
    //
    public function listCars() {

        $listCars = Car::all();

        return view('listCars', ['cars' => $listCars]);
    }
}
