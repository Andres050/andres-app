<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        return view('posts.index', [
            'posts' => Post::with('category','author')->orderBy('created_at','desc')->filter(
                request(['search','category','author'])
            )->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
