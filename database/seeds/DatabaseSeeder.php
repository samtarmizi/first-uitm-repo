<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Tarmizi',
            'email' => 'admin@mizi.my',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ali',
            'email' => 'ali@mizi.my',
            'password' => bcrypt('password'),
        ]);
    }
}
