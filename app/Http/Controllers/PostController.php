<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $arPosts = Post::all();
        return view('post.list', compact('arPosts'));
    }
    public function show($translit) {
        $post = Post::where('translit', $translit)->get()->first();
        return view('post.item', compact('post'));
    }
}
