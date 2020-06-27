<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
           [
               'name' => "Akande Salami",
               'email' => "admin@laravel",
               'type' => "admin",
               'bio' => "Administrator",
               'photo' => 'profile.png',
               'password' => bcrypt('lara98765'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Jeff Doe",
               'email' => "user@laravel",
               'type' => "user",
               'bio' => "Standard User",
               'photo' => 'profile.png',
               'password' => bcrypt('lara98765'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ]
       ]);
    }
}
