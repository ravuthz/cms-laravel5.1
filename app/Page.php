<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
    const POSTS_PER_PAGE = 12;
    protected $fillable = [
        'slug',
        'title',
        'description',
        'image',
        'author',
        'layout'
    ];

    // related items
    public function posts() {
        return $this->hasMany('App\Post');
    }

    // helper functions
    public static function listOn() {
        return self::where('status', 1)->orderBy('order', 'asc')->lists('title', 'slug');
    }

    public static function listOff() {
        return self::where('status', 0)->orderBy('order', 'asc')->lists('title', 'slug');
    }

    public static function getBy($slug) {
        return self::where('slug', "page/$slug")->first();
    }

    public static function getPostBy($slug = '', $status = 1) {
        if (!empty($slug)) {
            return self::where(['slug' => "page/$slug", 'status' => $status])->first()->posts()->paginate(self::POSTS_PER_PAGE);
        }
        return self::where('status', $status)->first()->posts()->paginate(self::POSTS_PER_PAGE);
    }

    public static function gallery() {
        return [
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ],
            [
                'name' => '',
                'href' => 'assets/img/gallery/flickr-img-1.jpg',
                'src'  => 'assets/img/gallery/flickr-img-1.jpg',
                'alt'  => 'Image Feed'
            ]
        ];
    }
}
