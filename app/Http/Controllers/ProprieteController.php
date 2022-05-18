<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use App\Models\Proprietaires;
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
        $proprietaire = Proprietaires::all();
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

        return redirect()->route('propriete.index');

    }
    public function update(Request $request, $id)
    {
        $propriete = Propriete::find($id);
        $propriete->update($request->all());
        return redirect()->route('propriete.index');
    }

    public function edit($id)
    {
        $propriete = Propriete::find($id);
        $typeProprietes=Type_Propriete::all();
        $quartiers=Quartier::all();
        $proprietaires=Proprietaires::all();
        return view('proprietes/edit', [
            'propriete' => $propriete,
            'typeProprietes'=>$typeProprietes,
            'quartiers'=>$quartiers,
            'proprietaires'=>$proprietaires,

        ]);
    }

    public function show($id)
    {

        $propriete = Propriete::find($id);
        return view('proprietes/show', [
            'propriete' => $propriete
        ]);
    }
}
