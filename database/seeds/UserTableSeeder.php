<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            'firstname'  => 'ravuth',
            'lastname'   => 'yo',
            'username'   => 'ravuthz',
            'type'       => 'admin',
            'email'      => 'ravuthz@gmail.com',
            'phone'      => '0964577770',
            'password'   => bcrypt('0964577770zZ'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
