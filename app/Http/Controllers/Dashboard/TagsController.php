<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller {
    public function show(Tag $tag) {
        $posts = $tag->posts()->latest()->published();
        $posts->setPath($tag->name);
        return view('post.index', $posts);
    }
}
