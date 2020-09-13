<?php

namespace App\Http\Controllers;

use App\supplierLocation;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class supplierLocationController extends Controller
{
    public function locationCreate(Store $session, Request $request)
    {
        $this->validate($request, [
            'city' => 'required',
            'district' => 'required',
            'street' => 'required'
        ]);


        $location = new supplierLocation(
            ['city' => $request->input('city'),
                'district'    => $request->input('district'),
                'street' => $request->input('street')
            ]);
        $location->save();

        return redirect()->route('blog.receipt');
    }
}
