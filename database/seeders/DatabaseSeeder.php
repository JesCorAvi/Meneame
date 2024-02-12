<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Label;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Article::factory(3)
        ->for(User::first())
        ->has(Label::factory(2))
        ->has(Comment::factory(3)->for(User::find(1)))
        ->create();

        Comment::factory(3)
        ->for(Comment::find(1), 'commentable')
        ->for(User::find(1))
        ->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
