<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicule;
use App\Proprietaire;
use App\Conducteur;
use App\User;

class ConducteurController extends Controller
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
        $plaque=$request->vehicule_id;
        $vehicule= Vehicule::find($plaque);
        $proprio = $request->proprietaire_id;
        $code = Proprietaire::find($proprio);
        if ($vehicule==null) {
            $request->session()->flash('erreur', 'Echec d\'enregistrement!Ce véhicule n\'est pas encore enregistré! Veuillez l\'enregistrer d\'abord');
            return redirect('inscription');
        }       
        elseif($code==null){
            // echo("Ce code est invalide!Vérifier à nouveau");
            $request->session()->flash('erreur', 'Echec d\'enregistrement!Ce code est invalide!Vérifier à nouveau');
            return redirect('inscription');
        }
        else{
        $chauffeur=Conducteur::create([
            'vehicule_id' =>$plaque,
            'proprietaire_id' =>$proprio,
            'nom'=> $request['nom'],
            'prenom'=> $request['prenom'],
            'telephone'=> $request['telephone'],
            'numpiece' => $request['numpiece'],
            'email' => $request['email'],
            'adresse' => $request['adresse'],
            'photo' => $request['photo']->store('img','public'),
        ]);
        $request->session()->flash('status', 'Succès! Consultez votre mail pour vos identifiants');
        $longueur = 10;
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < $longueur; $i++)
        {
            $chaineAleatoire .= (str_shuffle($caracteres[rand(0, $longueurMax - 1)]));
        }
        $user=User::create([
            'name' => $request['prenom'],
            'role_id' => '4',
            'conducteur_id' => $chauffeur->id,
            'email' => $request['email'],
            'password' => Hash::make($chaineAleatoire),
        ]);
        $user->notify(new RegisteredNotification());
        $_SESSION['pass'] = $chaineAleatoire;
        return redirect('inscription');
    }
        // $identiteproprio=$request->proprietaire_id;
        // $proprio=Proprietaire::find($identiteproprio);
        // if($vehicule->immatriculation->doesntExist() || ($proprio->nom && $proprio->prenom)->doesntExist())
        // {
        //     echo "<h4 style=\"color:red;\">propriétaire ou véhicule inexistant!
        //     Enregistrer d'abord le propriétaire et le véhicule ou vérifier l'orthographe!</h4>";
        // }
        // else
        // $chauffeur = new Conducteur();
        // $chauffeur->vehicule_id=$request->vehicule_id;
        // $chauffeur->proprietaire_id=$request->proprietaire_id;
        // $chauffeur->nom=$request->nom;
        // $chauffeur->prenom=$request->prenom;
        // $chauffeur->telephone=$request->telephone;
        // $chauffeur->numpiece=$request->numpiece;
        // $chauffeur->email=$request->email;
        // $chauffeur->adresse=$request->adresse;
        // $chauffeur->save();
        // $request->session()->flash('status', 'Succès!Connectez-vous pour répondre aux commandes!');
        // return view('inscription');
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
