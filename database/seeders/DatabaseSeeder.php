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
        User::truncate();
        Category::truncate();
        Blog::truncate();

        $user = User::factory(2)->create();

        $frontendCategory = Category::factory()->create([
            'category_name' => 'frontend',
        ]);

        $backendCategory = Category::factory()->create([
            'category_name'=>'backend',
        ]);

        Blog::factory(4)->create([
            'category_id' => $frontendCategory->id,
            'user_id' => $user->random()->id
        ]);

        Blog::factory(6)->create([
            'category_id' => $backendCategory->id,
            'user_id' => $user->random()->id
        ]);

    }
}
