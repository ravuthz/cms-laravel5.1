<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder {
    public function run() {
        $tags = [
            ['movie', 'movie'],
            ['song', 'song'],
            ['music', 'music'],
            ['tutorial', 'tutorial'],
            ['khmer movie', 'khmer_movie'],
            ['japan movie', 'japan_movie'],
            ['phone', 'phone']
        ];
        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name'         => $tag[0],
                'slug'         => $tag[1],
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
                'deleted_at'   => Carbon::now(),
                'published_at' => Carbon::now()
            ]);
        }
    }
}
