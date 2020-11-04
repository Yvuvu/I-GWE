<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteController extends Controller
{
    //
    public function rayon5km(){

SELECT id, nom, lat, lon, ( 6371 * acos( cos( radians(48.85296900) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians(2.34990300) ) + sin( radians(48.85296900) ) * sin( radians( lat ) ) ) ) AS distance FROM `agences` HAVING distance < 50 ORDER BY distance
    
}
}
