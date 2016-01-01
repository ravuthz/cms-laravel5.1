<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Page;
use App\Post;
use App\Tag;
use Illuminate\Support\Str;

class ShowController extends Controller {
    public function index() {
        Str::limit(10, 'hello');
        $data['posts'] = Post::getAll();
        $data['slides'] = [
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1'],
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1'],
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1'],
            (object) ['src' => 'assets/img/gallery/slider-img-1.jpg', 'alt' => 'Slider', 'href' => 'gallery-single.htm', 'name' => 'test1']
        ];
        $data['post'] = Post::getLatest()->first();
        return view('home.index', $data);
    }

    public function page($slug) {
        $data['page'] = Page::getBy($slug);
        $data['tags'] = Tag::all();

        $data['section1'] = (object) [
            'title'    => 'Main Section',
            'subtitle' => 'List all post in a section',
            'content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.',
            'posts'    => Page::getPostBy($slug)
        ];

        $data['section2'] = (object) [
            'title'    => 'Section Two',
            'subtitle' => 'Section Two Subtitle',
            'content'  => 'Section Two content'
        ];

        $data['section3'] = (object) [
            'title'    => 'Section Two',
            'subtitle' => 'Section Two Subtitle',
            'content'  => 'Section Two content'
        ];

        $data['sidebar'] = (object) [
            'latest_posts'  => Post::getLatest(),
            'popular_posts' => Post::getPopular()
        ];

        return view("home.page", $data);
    }

    public function post($slug) {
        $post = Post::getOn($slug);
        if (empty($post)) {
            abort(404);
        }
        $data['post'] = $post;
        return view('home.post', $data);
    }

    public function tag($slug) {
        $tag = Tag::getBy($slug);
        if (empty($tag)) {
            abort(404);
        }
        $data['tag'] = $tag;
        $data['tags'] = Tag::all();
        $data['sidebar'] = (object) [
            'latest_posts'  => Post::getLatest(),
            'popular_posts' => Post::getPopular()
        ];
        return view('home.post', $data);
    }
}
