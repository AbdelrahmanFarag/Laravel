<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class Supplier extends Model
{

    protected $fillable = ['username', 'email', 'password', 'name', 'phone'];


    public function cards()
    {
        return $this->hasMany('App\cards');
    }

    public function supplierLocation()
    {
        return $this->hasOne('App\supplierLocation');
    }


    public function addSupplier(Request $request, $session, $username, $password, $email, $phone, $name){

        $password = Hash::make($request->$password);
        $supplier = $session->get('supplier');
        array_push($supplier, ['username' => $username, 'password' => $password,
            'email' => $email, 'phone' => $phone, 'name' => $name]);
        $session->put('supplier', $supplier);

    }

    public function getSuppliers($session){

        return $session->get('suppliers');
    }
}
