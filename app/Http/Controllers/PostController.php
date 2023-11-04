<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends BaseController
{
    public function index() {
        $arPosts = Post::all();
        return view('post.list', compact('arPosts'));
    }
    public function show($translit) {
        $post = Post::where('translit', $translit)->get()->first();
        return view('post.item', compact('post'));
    }
    public function listDeleted() {
        $arPosts = Post::onlyTrashed()->get(); // withTrashed()
        return view('post.list', compact('arPosts'));
    }

    public function create() {
        $arCategories = Category::all();
        return view('post.create', compact('arCategories'));
    }
    public function store(StoreRequest $request) {

        $data = $request->validated();

        $createdPost = $this->service->store($data);

        return redirect()->route('post.item', $createdPost->translit);
    }

    public function edit(Post $post) {
        $categoryList = Category::all();
        return view('post.edit', compact('post', 'categoryList'));
    }

    /**/
    public function update(StoreRequest $request, Post $post) {


        $data = $request->validated();
        $this->service->update($data, $post);
        return redirect()->route('post.item', $data['translit']);

    }


    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.list');
    }
    public function destroyHard($post) {
        //$post->forceDelete();
        PostTag::where('post_id', $post)->delete(); // Удаление связанных тегов
        Post::where('id', $post)->forceDelete();
        return redirect()->route('post.list.deleted');
    }
    public function restore($post) {
        $post = Post::withTrashed()->find($post)->restore();
        return redirect()->route('post.list.deleted');
    }
}
