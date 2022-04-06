<?php

namespace App\Http\Controllers;
use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprietaireController extends Controller
{

    public function index()
    {

        $proprietaire = Proprietaire::all();
        return view('proprietaires/index', [
            'proprietaires' => $proprietaire
        ]);
    }



    public function create(){
        $proprietaire=Proprietaire::all();
        return view('proprietaires/add');


    }

    public function store(Request  $request){
        Proprietaire::create( $request->all());
        return redirect()->route('proprietaire.create');
    }

   

    // public function show(Proprietaire  $proprietaire){

    //     $villas = $proprietaire->villas;
    //     $immeubles = $proprietaire->immeubles;
        
    //     return view('proprietaire.create',
    //      [
    //          'proprietaire' => $proprietaire,
    //           'villas' => $villas,
    //           'immeubles' => $immeubles
    //         ]);

    // }





    public function destroy($id)
    {
        $proprietaire = Proprietaire::findOrFail($id);
        $proprietaire->delete();

        return ("proprietaires supprime");

    }
    public function update(Request $request, $id)
    {
        $proprietaire = Proprietaire::find($id);
        $proprietaire->update($request->all());
        return $proprietaire;
    }

    public function edit(Request $request, $id) { 

    }

}
