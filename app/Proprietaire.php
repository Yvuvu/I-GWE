<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    //
    protected $fillable = [
        'nom','prenom', 'telephone', 'numpiece', 'email', 'adresse',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function conducteur()
    {
        return $this->hasMany('App\Conducteur');
    }
    public function vehicule()
    {
        return $this->hasMany('App\Vehicule');
    }
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

}
