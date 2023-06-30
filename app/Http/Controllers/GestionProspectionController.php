<?php

namespace App\Http\Controllers;

use App\Models\Prospection;
use Illuminate\Http\Request;

class GestionProspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prospections=Prospection::where('myCheckbox',1)->get();
       
       return view('index', compact('prospections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prospection= new Prospection();
        $prospection->nom_agent=$request->input('nom_agent');
        $prospection->nom_client=$request->input('nom_client');
        $prospection->adresse_client=$request->input('adresse_client');
        $prospection->heure_debut=$request->input('heure_debut');
        $prospection->heure_fin=$request->input('heure_fin');
        $prospection->duree=$request->input('duree');
        $prospection->produit_presente=$request->input('produit_presente');
        $prospection->observation=$request->input('observation');
        $prospection->myCheckbox=$request->input('myCheckbox');
        $prospection->save();
       return redirect()->route('gestion_prospection.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prospection=Prospection::findorfail($id);
        return view('edite', compact('prospection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $prospection=Prospection::findorfail($id);
        
        $prospection->update([
        'nom_agent'=>$request->nom_agent,
        'nom_client'=>$request->nom_client,
        'adresse_client'=>$request->adresse_client,
        'heure_debut'=>$request->heure_debut,
        'heure_fin'=>$request->heure_fin,
        'duree'=>$request->duree,
        'produit_presente'=>$request->produit_presente,
        'observation'=>$request->observation,
        'myCheckbox'=>$request->myCheckbox
       ]);
       return redirect()->route('gestion_prospection.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            Prospection::destroy($id);
            return redirect()->back();
    }
}
