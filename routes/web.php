<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('post/{id}', function ($id){
    if($id > 0){
        return  DB::table('items')->where('id','=', $id)
            ->select('description', 'type')->get();

    }
    return view('blog.post');
})->name('blog.post');

Route::get('about-page' ,function () {
    return view('other.about');
})->name('other.about');


Route::get('Registration', function(){
    return view('blog.Register');
})->name('blog.registration');

Route::get('Login', function(){
    return view('blog.Login');
})->name('blog.login');


Route::post('Login', [
    'uses' => 'SupplierController@verifyLogin',
    'as' => 'blog.login'
]);

Route::post('Registration', [
    'uses' => 'SupplierController@supplierCreate',
    'as' => 'blog.registration'
]);

Route::get('supplier', function(){
    return view('blog.supplier');
})->name('blog.supplier');

Route::get('receipt', function(){
    return view('blog.receipt');
})->name('blog.receipt');


Route::get('cart', function(){
    return view('blog.cart');
})->name('blog.cart');

Route::post('cart', [
    'uses' => 'cardController@cardCreate', 'supplierLocationController@locationCreate',
    'as' => 'blog.cart'
]);

Route::get('suppliersData', [
    'uses' => 'SupplierController@getIndex',
    'as' => 'blog.suppliersData'
]);



Route::post('/search', function (\Illuminate\Http\Request  $request){
    $searchTerm = $request->input('searchTerm');
    if ($searchTerm != ''){
        $itemToFind = DB:: table('items')->where('type', 'like', '%'.$searchTerm.'%')
            ->get();
        if (count($itemToFind)>0){
            return $itemToFind;
        }
        else{
            echo 'No matching items found';
        }
    }
})->name('Partials.search');



Route::group(['prefix' => 'admin'], function(){

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route:: post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route:: post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
});


