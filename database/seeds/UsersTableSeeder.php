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
               'name' => "Alexandar Pierce",
               'email' => "alexandar@laravel",
               'type' => "admin",
               'bio' => "Pierce",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Brad Diesel",
               'email' => "diesel@laravel",
               'type' => "author",
               'bio' => "Diesel",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Salami Pierce",
               'email' => "pierce@laravel",
               'type' => "user",
               'bio' => "Pierce",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Nora Silvester",
               'email' => "nora@laravel",
               'type' => "admin",
               'bio' => "Silvester",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Jonathan Burke",
               'email' => "burke@laravel",
               'type' => "author",
               'bio' => "Burke",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Sarah Ross",
               'email' => "sarah@laravel",
               'type' => "author",
               'bio' => "Sarah Ross",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Adam Jones",
               'email' => "adam@laravel",
               'type' => "user",
               'bio' => "Jones",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Bay White",
               'email' => "white@laravel",
               'type' => "author",
               'bio' => "White",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Mina Black",
               'email' => "mina@laravel",
               'type' => "admin",
               'bio' => "Black",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Nina Mcintire",
               'email' => "nina@laravel",
               'type' => "user",
               'bio' => "Mcintire",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Akande Salami",
               'email' => "salami@laravel",
               'type' => "admin",
               'bio' => "Akande",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ],
           [
               'name' => "Jeff Doe",
               'email' => "doe@laravel",
               'type' => "user",
               'bio' => "Jeff",
               'photo' => 'profile.png',
               'password' => bcrypt('auth1234'),
               'created_at' => \Carbon\Carbon::now(),
               'updated_at' => \Carbon\Carbon::now()
           ]
       ]);
    }
}
