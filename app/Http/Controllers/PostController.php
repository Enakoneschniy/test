<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.list', $this->data);
    }

    public function single($id = null){
        $this->data['post'] = $id;
        return view('posts.single', $this->data);
    }
}
