<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class supplierLocation extends Model
{
    protected $fillable = ['city', 'district', 'street'];


    public function suppliers()
    {
        return $this->belongsTo('App\suppliers', '_id');
    }

    public function addLocation(Request $request, $session, $city, $district, $street){

        $location = $session->get('card');
        array_push($card, ['city' => $city, 'district' => $district,
            'street' => $street]);
        $session->put('location', $location);

    }

}
