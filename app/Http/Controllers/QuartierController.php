<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    public function index()
    {

        $quartier = Quartier::all();
        return view('quartiers/index', [
            'quartiers' => $quartier
        ]);
    }

    public function create(){
        $quartier=Quartier::all();
        return view('quartiers/create',[
            'quartiers'=>$quartier
        ]);

    }

    public function store(Request  $request){
        Quartier::create( $request->all());
        return redirect()->route('quartiers.index');
    }
    public function destroy($id)
    {
        $quartier = Quartier::findOrFail($id);
        $quartier->delete();

        return ("quartiers supprimer");

    }
    public function update(Request $request, $id)
    {
        $quartier = Quartier::find($id);
        $quartier->update($request->all());
        return $quartier;
    }
}
