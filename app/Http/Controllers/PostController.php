<?php

namespace App\Http\Controllers;

use\Illuminate\Http\Request;
use App\Item;

use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function getIndex(Store $session)
    {
      $posts = Item::all();
       return view('blog.index', ['posts'=>$posts]);
    }

    public function getAdminIndex(Store $session){
        $posts = Item::all();
        return view('admin.index', ['posts'=>$posts]);
    }

    public function getPost(Store $session, $id){
        $post = new Item();
        $post = $post->getPost($session, $id);
        return view('blog.post', ['post'=>$post]);
    }

    public function getAdminCreate(){

        return view('admin.create');
    }

    public function getAdminEdit(Store $session, $id){
        $post = new Item();
        $post = $post->getPost($session, $id);
        return view('admin.edit', ['post'=>$post, 'postId' => $id]);
    }

    public function postAdminCreate(Store $session, Request $request){
        $this->validate($request, [
            'title' => 'required|min:5',
            'price' => 'required',
            'speciality' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'specification' => 'required',
            'imageUrl' =>  'required|unique:posts|max:255']);

        $post = new Item(
            ['type' => $request->input('title'),
            'price' => $request->input('price'),
             'speciality' => $request->input('speciality'),
             'brand' => $request->input('brand'),
             'imageUrl' => $request->input('imageUrl'),
             'description' => $request->input('description'),
                'specification' => $request->input('specification')
            ]);
        $post->save();

        return redirect()->route('admin.index')->with('info', 'Item created, new title is:
        '.$request->input('title'));
    }

    public function postAdminUpdate(Store $session, Request $request){

            $this->validate($request, [
                'title' => 'required|min:5',
                'price' => 'required',
                'speciality' => 'required',
                'brand' => 'required'
                ]);

        return redirect()->route('admin.index')->with('info', 'Item edited, new title is:
        '.$request->input('title'));
    }




}
