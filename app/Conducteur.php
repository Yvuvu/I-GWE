<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    //
    protected $fillable = [
        'vehicule_id','proprietaire_id', 'nom', 'prenom', 'telephone', 'numpiece', 'email', 'adresse',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function proprietaire()
    {
        return $this->belongsTo('App\Proprietaire');
    }
    public function vehicule()
    {
        return $this->belongsTo('App\Vehicule');
    }
}
