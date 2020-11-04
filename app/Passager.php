<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    //
    protected $fillable = [
        'nom','prenom', 'telephone', 'numpiece', 'email', 'adresse',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
