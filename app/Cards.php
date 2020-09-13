<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Cards extends Model
{
    protected $fillable = ['cardName', 'cardNumber', 'expDate', 'CVV'];


    public function suppliers()
    {
        return $this->belongsTo('App\suppliers', '_id');
    }


    public function addCard(Request $request, $session, $cardName, $cardNumber, $expDate, $CVV){

        $card = $session->get('card');
        array_push($card, ['cardName' => $cardName, 'cardNumber' => $cardNumber,
            'expDate' => $expDate, 'CVV' => $CVV]);
        $session->put('card', $card);

    }
}
