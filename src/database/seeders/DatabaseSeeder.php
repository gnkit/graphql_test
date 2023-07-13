<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Modules\Post\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Post::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@mail.com',
            'email_verified_at' => now(),
            'avatar' => null,
            'password' => Hash::make('manager'),
            'remember_token' => Str::random(10),
        ]);
    }
}
