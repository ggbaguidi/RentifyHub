<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcategorie = Categorie::all();
        return view('categories.listeCategorie')->with('allcategories',$allcategorie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.ajoutCategorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request){
       $categorie = new Categorie();
       $categorie->type_categorie = $request->type_categorie;
       $categorie->save();
      return back()->with('addedMessage','La catégorie a été ajoutée avec succès !');
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
        $mycategory = Categorie::find($id);
      
        return view('categories.editCategorie')->with('currentCategorie',$mycategory);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $id)
    {
       Categorie::find($id)->update(
            [
                'type_categorie'=> $request->type_categorie
            ]
            );

            return redirect()->route('categories.index')->with('updatedMessage', 'La catégorie a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::find($id)->delete();
        return back()->with('deletedMessage','La categorie a été suprimée avec succès');
    }
}
