<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $david = User::factory()->create(['name' => 'david michale', 'email' => 'david@gmail.com','username' => 'david']);
        $andrew = User::factory()->create(['name' => 'andrew william', 'email' => 'andrew@gmail.com','username' => 'andrew']);
        $frontend = Category::factory()->create(['category_name' => 'frontend','slug' => 'frontend']);
        $backend = Category::factory()->create(['category_name' => 'backend','slug' => 'backend']);

        Blog::factory(5)->create(['user_id' => $david->id, 'category_id' => $frontend->id]);
        Blog::factory(5)->create(['user_id' => $andrew->id, 'category_id' => $backend->id]);
    }
}
