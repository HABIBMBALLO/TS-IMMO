<?php

namespace App\Http\Controllers;

use App\Models\Proprietaires;
use Illuminate\Http\Request;
use PDF;

class ProprietairesController extends Controller
{
    public function index()
    {

        $proprietaire = Proprietaires::all();
        return view('proprietaires/index', [
            'proprietaires' => $proprietaire
        ]);
    }

    public function create(){
        $proprietaire=Proprietaires::all();
        return view('proprietaires.add');


    }

    public function store(Request  $request){
        Proprietaires::create( $request->all());
        return redirect()->route('proprietaire.create');
    }
    public function destroy($id)
    {
        $proprietaire = Proprietaires::findOrFail($id);
        $proprietaire->delete();

        return redirect()->route('proprietaire.list');

    }
    public function update(Request $request, $id)
    {
        $proprietaire = Proprietaires::find($id);
        $proprietaire->update($request->all());
        return redirect()->route('proprietaire.list');
    }
    public function edit($id)
    {
        $proprietaire = Proprietaires::find($id);
        return view('proprietaires/edit', [
            'proprietaires' => $proprietaire
        ]);
    }

    public function show($id)
    {

        $proprietaire = Proprietaires::find($id);
        return view('proprietaires/show', [
            'proprietaires' => $proprietaire
        ]);
    }

    }
