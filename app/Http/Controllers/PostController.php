<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function create() {
        return view('post.create');
    }
    public function store(StoreRequest $request) {
        $data = $request->validated();
        $data['translit'] = Str::slug($data['name']);
        $createdPost = Post::create($data);
        return redirect()->route('post.item', $createdPost->translit);
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }
    public function update(StoreRequest $request, Post $post) {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('post.item', $data['translit']);
    }
}
