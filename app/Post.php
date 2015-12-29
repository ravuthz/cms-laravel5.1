<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    const POSTS_PER_PAGE = 12;
    const LATEST_POST_NUM = 3;
    const POPULAR_POST_NUM = 3;

    protected $fillable = [
        'slug',
        'title',
        'content',
        'status',
        'user_id',
        'page_id'
    ];

    public function page() {
        return $this->belongsTo('App\Page');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function getTagListAttribute() {
        return $this->tags->lists('id')->all();
    }

    /* helper functions */
    public static function getOn($slug) {
        return self::where(['slug' => $slug, 'status' => 1])->first();
    }

    public static function getOff($slug) {
        return self::where(['slug' => $slug, 'status' => 0])->first();
    }

    public static function getAll() {
        return self::paginate(self::POSTS_PER_PAGE);
    }

    public static function getLatest() {
        return self::where('status', 1)->orderBy('id', 'DESC')->limit(self::LATEST_POST_NUM)->get();
    }

    public static function getPopular() {
        return self::where('status', 1)->orderBy('click_count', 'DESC')->limit(self::POPULAR_POST_NUM)->get();
    }
}
