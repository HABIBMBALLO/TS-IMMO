<?php

namespace App\Http\Controllers;
use App\Models\Propriete;
use App\Models\Proprietaire;
use App\Models\Type_Propriete;
use App\Models\Quartier;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function index()
    {

        $propriete = Propriete::all();
        return view('proprietes/index', [
            'proprietes' => $propriete
        ]);
    }

    public function create(){
        $propriete=Propriete::all();
        $proprietaire = Proprietaire::all();
        $typePropriete = Type_Propriete::all();
        $quartier = Quartier::all();
        return view('proprietes/add',[
            'proprietaires'=>$proprietaire,
            'typeproprietes'=>$typePropriete,
            'quartiers'=>$quartier,
        ]);

    }

    public function store(Request  $request){
        Propriete::create( $request->all());
        return redirect()->route('propriete.index');
    }
    public function destroy($id)
    {
        $propriete = Propriete::findOrFail($id);
        $propriete->delete();

        return ("propriete supprime");

    }
    public function update(Request $request, $id)
    {
        $propriete = Propriete::find($id);
        $propriete->update($request->all());
        return $propriete;
    }
}
