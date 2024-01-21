<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarFormRequest;
use App\Models\Car;
use App\Models\Categorie;
use App\Models\Marque;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcar = Car::all();
        $allcategorie =new Categorie();
        $allmarque =new Marque();
        return view('cars.listeCars')->with(
            [
                'allcars'=> $allcar,
                'allcategories'=>$allcategorie,
                'allmarques'=>$allmarque
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $marques = Marque::all();
        return view('cars.ajoutCars')->with([
            'lescategories' => $categories,
            'lesmarques'=>$marques
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarFormRequest $request)
    {
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->storeAs('public/images_cars',$filename);

    }

    $infoCar = [
        'nom'=>$request->nom,
        'user_id'=>1,
        'categorie_id'=>$request->categorie_id,
        'description'=>$request->description,
        'marque_id'=>$request->marque_id,
        'alimentation'=>$request->alimentation,
        'carburant'=>$request->carburant,
        'prix'=>$request->prix,
        'capacite_reservoir'=>$request->capacite_reservoir,
        'poids_vide'=>$request->poids_vide,
        'nombre_usager'=>$request->nombre_usager,
        'dimensions'=>$request->dimensions,
        'empattement'=>$request->empattement,
        'cylindre'=>$request->cylindre,
        'garde_sol'=>$request->garde_sol,
        'photo'=>$filename,
    ];

    Car::create($infoCar);
        return back()->with('addedMessage', 'Le véhicule a été enrégistré avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showedCar = Car::find($id);
        return view('cars.showCar')->with('showedCar',$showedCar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myCar = Car::find($id);
        $lesmarques = Marque::all();
        $lescategories = Categorie::all();
        return view('cars.editCars')->with(
            [
                'currentCar'=> $myCar,
                'lesmarques'=>$lesmarques,
                'lescategories'=>$lescategories
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarFormRequest $request, $id)
    {
       $updatedCar = Car::find($id);

      if ($request->hasFile('photo'))
      {
          $destination = 'public/images_cars/'.$updatedCar->photo;
          if(File::exists($destination)){
              File::delete($destination);
          }

          $file =$request->file('photo');
          $extension = $file->getClientOriginalExtension();
          $filename = time(). '.' .$extension;
          $file->storeAs('public/images_cars',$filename);
      }
       

        $infoCar = [
            'nom'=>$request->nom,
            'user_id'=>1,
            'categorie_id'=>$request->categorie_id,
            'description'=>$request->description,
            'marque_id'=>$request->marque_id,
            'alimentation'=>$request->alimentation,
            'carburant'=>$request->carburant,
            'prix'=>$request->prix,
            'capacite_reservoir'=>$request->capacite_reservoir,
            'poids_vide'=>$request->poids_vide,
            'nombre_usager'=>$request->nombre_usager,
            'dimensions'=>$request->dimensions,
            'empattement'=>$request->empattement,
            'cylindre'=>$request->cylindre,
            'garde_sol'=>$request->garde_sol,
           'photo'=>$filename
        ];

       
        $updatedCar->update($infoCar);

        return redirect()->route('cars.index')->with('updatedMessage','Le véhicule a été mis à jour avec succès !');
    
    }
   
        
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::find($id)->delete();
        return back()->with('deletedMessage','Le véhicule a été suprimé avec succès !');

    }
}
