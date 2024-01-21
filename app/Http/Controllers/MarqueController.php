<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use App\Http\Requests\MarqueRequest;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allmarque = Marque::all();
        return view('marques.listeMarque')->with('allmarques',$allmarque);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marques.ajoutMarque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarqueRequest $request)
    {
        $marque = new Marque();
       $marque->type_marque = $request->type_marque;
       $marque->save();
       return back()->with('addedMessage', 'La marque a été ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $myMarque = Marque::find($id);
            return view('marques.editMarque')->with('currentMarque',$myMarque);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarqueRequest $request, $id)
    {
     Marque::find($id)->update(
         [
             'type_marque'=>$request->type_marque
         ]
     );  

     return redirect()->route('marques.index')->with('updatedMessage', 'La marque a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Marque::find($id)->delete();
        return back()->with('deletedMessage','La marque a été suprimée avec succès');
    }
}
