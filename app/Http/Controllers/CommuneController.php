<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use App\Models\Commune;
class CommuneController extends Controller
{

    public function index()
    {

        $commune = Commune::all();
        return view('communes/index', [
            'communes' => $commune
        ]);
    }

    public function create(){
        $commune=Commune::all();
        return view('communes/create',[
            'communes'=>$commune
        ]);

    }

    public function store(Request  $request){
        Commune::create( $request->all());
        return redirect()->route('communes.index');
    }
    public function destroy($id)
    {
        $commune = Commune::findOrFail($id);
        $commune->delete();

        return ("commune supprimer");

    }
    public function update(Request $request, $id)
    {
        $commune = Commune::find($id);
        $commune->update($request->all());
        return $commune;
    }
}