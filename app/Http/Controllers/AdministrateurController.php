<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;

class AdministrateurController extends Controller
{
    public function index()
    {

        $administrateur = Administrateur::all();
        return view('administrateurs/index', [
            'administrateurs' => $administrateur
        ]);
    }

    public function create(){
        $administrateur=Administrateur::all();
        return view('administrateurs/create',[
            'administrateurs'=>$administrateur
        ]);

    }

    public function store(Request  $request){
        Administrateur::create( $request->all());
        return redirect()->route('administrateurs.index');
    }
    public function destroy($id)
    {
        $administrateur = Administrateur::findOrFail($id);
        $administrateur->delete();

        return ("administrateur supprimer");

    }
    public function update(Request $request, $id)
    {
        $administrateur = Administrateur::find($id);
        $administrateur->update($request->all());
        return $administrateur;
    }
}
