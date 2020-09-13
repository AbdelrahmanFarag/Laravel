<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class orderItem extends Model
{
    protected $fillable = ['quantity'];

    public function item()
    {
        return $this->belongsToMany('App\item', '_id');
    }

    public function addItem(Request $request, $session, $quantity){

        $orderItem = $session->get('card');
        array_push($orderItem, ['quantity' => $quantity]);
        $session->put('orderItem', $orderItem);

    }
}
