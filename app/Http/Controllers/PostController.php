<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        
        return view('home', [
            'articles' => Post::all()
    ]);
    }

    public function show($id){
        
        $post = Post::find($id);

        if($post === null){
            abort(404);
        }

        return view('article', [
            'article' => Post::find($id)
        ]);
    }
}
