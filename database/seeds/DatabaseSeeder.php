<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        //$this->call(PostsTableSeeder::class);   之前做過
        $this->call(PostsTableSeeder::class);
    }
}
