<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    public function vehicule()
    {
        return $this->hasMany('App\Vehicule');
    }
}
