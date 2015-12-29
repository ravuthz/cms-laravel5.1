<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            'firstname'      => 'ok',
            'lastname'       => 'sok',
            'username'       => 'lol',
            'type'           => 'admin',
            'email'          => 'lol@gmail.com',
            'phone'          => '111111111',
            'password'       => bcrypt('password'),
            'remember_token' => '',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now()
        ]);

        DB::table('users')->insert([
            'firstname'      => 'lee',
            'lastname'       => 'sok',
            'username'       => 'fake',
            'type'           => 'user',
            'email'          => 'fake@gmail.com',
            'phone'          => '222222222',
            'password'       => bcrypt('password'),
            'remember_token' => '',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now()
        ]);

        DB::table('users')->insert([
            'firstname'      => 'number',
            'lastname'       => 'one',
            'username'       => 'nexfree',
            'type'           => 'admin',
            'email'          => 'nexfree@gmail.com',
            'phone'          => '3573573570',
            'password'       => bcrypt('password'),
            'remember_token' => '',
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now()
        ]);
    }
}
