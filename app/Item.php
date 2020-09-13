<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Item extends Model{

    protected $fillable = ['type', 'price','speciality','brand', 'imageUrl', 'description', 'specification'];


    public function order_item()
    {
        return $this->hasMany('App\order_item');
    }

    public function getPosts($session){
        if (!$session->has('items'))
            $this->createDummyData($session);
        return $session->get('items');
    }

    public function getPost($session, $id){
        if (!$session->has('items'))
            $this->createDummyData($session);
        return $session->get('items')[$id];
    }

    public function addPost($session, $title, $brand, $speciality,
                            $specification,$imageUrl, $description){
        if (!$session->has('items'))
            $this->createDummyData($session);
        $items = $session->get('items');
        array_push($items, ['title' => $title, 'brand' => $brand,
            'speciality' => $speciality, 'imageUrl' => $imageUrl,
            'specification' => $specification,'description' => $description]);
        $session->put('items', $items);
    }

    public function editPost($session, $id, $title, $content, $speciality, $brand, $description){
        $items = $session->get('items');
        $posts[$id] = ['title' => $title, 'content' => $content,
            'speciality' => $speciality, 'brand' => $brand, 'description' => $description];
        $session->put('posts', $items);
    }

    private function createDummyData($session){
        $items = [
            ['title' => 'Learning Laravel',
            'content' => "This blog post will get you right on track with Laravel"],

            ['title'=>'The next steps',
             'content'=>'Laravel starts up upon each request']
        ];
        $session ->put('items', $items);
    }








}
