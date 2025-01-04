<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456789),
            'role' => 'admin'
        ]);

        for ($i = 0; $i < 20; $i++) {
            Category::create([
                'name' => json_encode([
                    'uz' => 'Kategoriya ' . $i,
                    'ru' => 'Категория ' . $i,
                    'en' => 'Category ' . $i
                ], true),
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            News::create([
                'category_id' => rand(1, 20),
                'title' => json_encode([
                    'uz' => 'Yangilik ' . $i,
                    'ru' => 'Новость ' . $i,
                    'en' => 'News ' . $i
                ], true),
                'description' => json_encode([
                    'uz' => 'Batafsil ' . $i,
                    'ru' => 'Подробнее ' . $i,
                    'en' => 'More ' . $i
                ], true),
            ]);
        }
    }
}
