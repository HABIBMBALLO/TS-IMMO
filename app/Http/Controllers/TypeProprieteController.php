<?php

namespace App\Http\Controllers;

use App\Models\Type_Propriete;
use Illuminate\Http\Request;

class TypeProprieteController extends Controller
{

    public function index()
    {

        $typePropriete = Type_Propriete::all();
        return view('typeProprietes/index', [
            'typePropretes' => $typePropriete
        ]);
    }

    public function create(){
        $typePropriete=Type_Propriete::all();
        return view('typeProprietes/add');

    }

    public function store(Request  $request){
        Type_Propriete::create( $request->all());
        return redirect()->route('typepropriete.index');
    }
    public function destroy($id)
    {
        $typePropriete = Type_Propriete::findOrFail($id);
        $typePropriete->delete();

        return ("typePropriete supprimer");

    }
    public function update(Request $request, $id)
    {
        $typePropriete = Type_Propriete::find($id);
        $typePropriete->update($request->all());
        return $typePropriete;
    }
}
