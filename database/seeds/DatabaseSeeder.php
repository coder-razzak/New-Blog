<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('users')->insert([
            [
                'role_id'       => '1',
                'name'          => 'Rakib Khan',
                'username'      => 'rakib',
                'phone'         => '01779968783',
                'email'         => 'admin@gmail.com',
                'password'      => bcrypt('adminadmin'),
            ],
            [
                'role_id'       => '2',
                'name'          => 'Kausar Habib',
                'username'      => 'kh',
                'phone'         => '01779968783',
                'email'         => 'author@gmail.com',
                'password'      => bcrypt('authorauthor'),
            ],
        ]);

        DB::table('roles')->insert([
            [
                'name'          => 'Admin',
                'slug'          => 'admin'
            ],
            [
                'name'          => 'Author',
                'slug'          => 'author'
            ]
        ]);
    }
}
