<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get
        $categories = Categorie::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
   
    
        //enregister
        public function store(Request $request)
          {

$categorie = new Categorie([
'nomcategorie' => $request->input('nomcategorie'),
'imagecategorie' => $request->input('imagecategorie')
]);
$categorie->save();
return response()->json($categorie, 201);
}
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //show avec id
        $categorie = Categorie::find($id);
        return response()->json($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //modifier
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response()->json($categorie, 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categorie $id)
    {
        //suuprimer
        $categorie = Categorie::find($id);
        $categorie->delete();
        return response()->json('Catégorie supprimée !');
    }
}
