<?php

namespace App\Http\Controllers;

use App\orderItem;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class orderItemController extends Controller
{
    public function cardCreate(Store $session, Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required'
        ]);


        $orderItem = new orderItem(
            ['quantity' => $request->input('quantity')
            ]);
        $orderItem->save();


    }
}
