<?php

namespace App\Services\Post;

use App\Models\Post;
use Illuminate\Support\Str;

class Service
{

    public function store($data) {


        if(!$data['translit']) $data['translit'] = Str::slug($data['name']);
        $createdPost = Post::create($data);
        return $createdPost;
    }

    public function update($data, $post) {
        return $post->update($data);
    }

}
