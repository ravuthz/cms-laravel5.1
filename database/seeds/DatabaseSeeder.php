<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(SettingTableSeeder::class);

        Model::reguard();
    }
}
