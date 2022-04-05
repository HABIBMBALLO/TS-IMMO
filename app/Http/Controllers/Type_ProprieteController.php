<?php

namespace App\Http\Controllers;
use App\Models\TypePropriete;
use Illuminate\Http\Request;

class Type_ProprieteController extends Controller
{
    public function index()
    {
        $type_Propriete = TypePropriete::all();
        return view('typeProprietes/index', [
            'typePropretes' => $type_Propriete
        ]);
    }

    public function create(){
        $type_Propriete=TypePropriete::all();
        return view('type_Proprietes/add');

    }

    public function store(Request  $request){
        TypePropriete::create( $request->all());
        return redirect()->route('type_propriete.index');
    }
    public function destroy($id)
    {
        $typePropriete = TypePropriete::findOrFail($id);
        $typePropriete->delete();

        return ("type_Propriete supprimer");

    }
    public function update(Request $request, $id)
    {
        $typePropriete = TypePropriete::find($id);
        $typePropriete->update($request->all());
        return $typePropriete;
    }
}