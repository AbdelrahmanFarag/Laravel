<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{

    public function getIndex(Store $session)
    {
        $suppliers = Supplier::all();
        return view('blog.suppliersData', ['supplier'=>$suppliers]);
    }

    public function supplierCreate(Store $session, Request $request)
    {
      $this->validate($request, [
          'email' => 'email',
          'password' => 'required|alphaNum|min:8',
          'name' => 'required',
          'phone' => 'required',
          'username' => 'required']);


        $supplier = new Supplier(
            ['name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
        $supplier->save();

        return redirect()->route('blog.supplier')->with('info', ' new user added:
        '.$request->input('username'));
    }

    public function verifyLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $userToFind = DB:: table('suppliers')->where('username', '=', $username)
            ->where('password', '=', $password)->exists();

        if (!empty($userToFind)){
            return redirect()->route('blog.supplier')->with('info', $request->input('username').
            'successfully logged in');
        }
        else{
            return redirect()->route('blog.registration')->with('info', 'username: '.$request->input('username').
                'does not exist, you can register by filling the following form');
        }
    }
}
