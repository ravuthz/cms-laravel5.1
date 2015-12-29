<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder {
    public function run() {
        $pages = [
            ['Home', '/', 'home.png', 'ravuthz', 1, 1],
            ['Music', 'page/music', 'music.png', 'ravuthz', 2, 1],
            ['Video', 'page/video', 'video.png', 'ravuthz', 3, 1],
            ['Movie', 'page/movie', 'movie.png', 'ravuthz', 4, 1],
            ['About', 'page/about', 'about.png', 'ravuthz', 5, 1],
            ['Contact', 'page/contact', 'contact.png', 'ravuthz', 6, 1],
            ['Other', 'page/other', 'contact.png', 'ravuthz', 7, 1],
            ['Hidden', 'page/hidden', 'contact.png', 'ravuthz', 8, 0]
        ];

        $layouts = ['layout-1', 'layout-2', 'layout-3', 'layout-4', 'layout-5'];

        foreach ($pages as $page) {
            DB::table('pages')->insert([
                'title'        => $page[0],
                'slug'         => $page[1],
                'description'  => '',
                'image'        => $page[2],
                'author'       => $page[3],
                'order'        => $page[4],
                'status'       => $page[5],
                'click_count'  => 0,
                'layout'       => $layouts[rand(0, 4)],
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
                'deleted_at'   => Carbon::now(),
                'published_at' => Carbon::now()
            ]);
        }
    }
}
