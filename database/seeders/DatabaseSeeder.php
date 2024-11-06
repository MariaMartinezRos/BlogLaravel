<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User $user = User::

        User::factory(count:5)->create();
        $users = User::all();

        $users->each(function ($user) {
           $user->posts()->saveMany(
               Post::factory(count:10)->make() // Crea 10 posts por cada usuario
           );
        });

        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
