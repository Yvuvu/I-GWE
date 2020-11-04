<?php
namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
$_SESSION['login'] = ' ';
$_SESSION['pass'] = ' ';
use Illuminate\Support\Facades\Hash;

use App\Passager;
use App\user;
use App\Notifications\RegisteredNotification;
class PassagerController extends Controller
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
        // do{
            $passager=Passager::create([
                'nom'=> $request['nom'],
                'prenom'=> $request['prenom'],
                'telephone'=> $request['telephone'],
                'numpiece' => $request['numpiece'],
                'email' => $request['email'],
                'adresse' => $request['adresse'],
            ]);
        $_SESSION['login'] = $request['prenom'];
        $request->session()->flash('status', 'Succès! Vous recevrez vos identifiants par mail!');
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
            'passager_id' => $passager->id,
            'email' => $request['email'],
            'password' => Hash::make($chaineAleatoire),
        ]);
        $user->notify(new RegisteredNotification());
        $_SESSION['pass'] = $chaineAleatoire;
        return redirect('inscription');
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
