<?php

namespace App\Http\Controllers;

use App\Models\Type_Propriete;
use Illuminate\Http\Request;

class Type_ProprieteController extends Controller
{

    public function index()
    {

        $type_Propriete = Type_Propriete::all();
        return view('typeProprietes/index', [
            'typePropretes' => $type_Propriete
        ]);
    }

    public function create(){
        $type_Propriete=Type_Propriete::all();
        return view('type_Proprietes/add');

    }

    public function store(Request  $request){
        Type_Propriete::create( $request->all());
        return redirect()->route('type_propriete.index');
    }
    public function destroy($id)
    {
        $typePropriete = Type_Propriete::findOrFail($id);
        $typePropriete->delete();

        return ("type_Propriete supprimer");

    }
    public function update(Request $request, $id)
    {
        $typePropriete = Type_Propriete::find($id);
        $typePropriete->update($request->all());
        return $typePropriete;
    }
}