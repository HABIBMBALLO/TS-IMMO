<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
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
        // $administrateur= Administrateur::all();
        return view('proprietaires/add');


    }

    public function store(Request  $request){
        Proprietaire::create( $request->all());
        return redirect()->route('proprietaire.create');
    }


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

    public function edit($id)
    {
        $proprietaire = Proprietaire::find($id);
        return view('proprietaires/edit', [
            'proprietaires' => $proprietaire
        ]);
    }
    
    public function show($id)
    {
        $proprietaire = Proprietaire::find($id);
        return view('proprietaires/show', [
            'proprietaires' => $proprietaire
        ]);
    }
}
