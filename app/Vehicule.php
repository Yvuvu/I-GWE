<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    //
    protected $fillable = [
        'proprietaire_id','categorie_id', 'immatriculation', 'cartegrise', 'marque', 'couleur',
    ];
    public function conducteur()
    {
        return $this->hasMany('App\Conducteur');
    }
    public function proprietaire()
    {
        return $this->belongsTo('App\Proprietaire');
    }
}
