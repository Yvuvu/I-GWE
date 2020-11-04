<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicule;
use App\Proprietaire;
use App\Categorie;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $code=$request->proprietaire_id;
        $id=substr($code,10);
        $identiteproprio=Proprietaire::find($id);
        dd($identiteproprio);

        if($identiteproprio==false)
        {
            $request->session()->flash('erreur','Propriétaire inconnu! enregistrez-le d\'abord ou vérifiez l\'orthographe');
            return redirect('inscription');
        }
        else
        {
            $proprietaire=Proprietaire::all();
            $categorie = Categorie::all();
            $vehicule = new Vehicule ();
            $vehicule->proprietaire_id=$request->proprietaire_id;
            $vehicule->categorie_id=$request->categorie_id;
            $vehicule->immatriculation=$request->immatriculation;
            $vehicule->cartegrise=$request->cartegrise;
            $vehicule->marque=$request->marque;
            $vehicule->couleur=$request->couleur;
            $vehicule->save();
            $request->session()->flash('status', 'Succès! Créer un compte conducteur pour les commandes!');            
            return redirect('inscription');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
