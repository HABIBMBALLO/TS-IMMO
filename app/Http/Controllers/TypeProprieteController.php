<?php

namespace App\Http\Controllers;
use App\Models\TypePropriete;
use Illuminate\Http\Request;

class TypeProprieteController extends Controller
{
    public function index()
    {
        $type_Propriete = TypePropriete::all();
        return view('typeProprietes/index', [
            'typeProprietes' => $type_Propriete
        ]);
    }

    public function create(){
        $type_Propriete=TypePropriete::all();
        return view('typeProprietes/add');

    }

    public function store(Request  $request){
        TypePropriete::create( $request->all());
        return redirect()->route('typePropriete.index');
    }
    public function destroy($id)
    {
        $typePropriete = TypePropriete::findOrFail($id);
        $typePropriete->delete();

        return ("typePropriete supprimer");

    }
    public function update(Request $request, $id)
    {
        $typePropriete = TypePropriete::find($id);
        $typePropriete->update($request->all());
        return $typePropriete;
    }
}