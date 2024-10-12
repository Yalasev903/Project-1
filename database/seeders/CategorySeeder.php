<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'best e-juice', 'slug' => 'best_e-juice'],
            ['name' => 'best mod', 'slug' => 'best-mod'],
            ['name' => 'best pan', 'slug' => 'best-pan'],
            ['name' => 'best pod', 'slug' => 'best-pod'],
            ['name' => 'best tank', 'slug' => 'best-tank'],
            ['name' => 'best vaps', 'slug' => 'best-vaps'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']], // Поиск по полю slug
                $category // Данные для обновления или создания
            );
        }
    }
}
