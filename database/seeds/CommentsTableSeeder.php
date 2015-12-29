<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder {
    public function run() {
        $comments = [
            ['1', '1', 'text somthing 1'],
            ['2', '2', 'text somthing 2'],
            ['3', '3', 'text somthing 3'],
            ['1', '4', 'text somthing 4'],
            ['2', '5', 'text somthing 5'],
            ['3', '6', 'text somthing 6']
        ];

        foreach ($comments as $comment) {
            DB::table('comments')->insert([
                'user_id'      => $comment[0],
                'post_id'      => $comment[1],
                'text'         => $comment[2],
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
                'deleted_at'   => Carbon::now(),
                'published_at' => Carbon::now()
            ]);
        }
    }
}
