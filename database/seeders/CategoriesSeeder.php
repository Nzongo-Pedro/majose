<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caregories = [
            ['name' => 'Casacos'],
            ['name' => 'Saias'],
            ['name' => 'Jeans'],
            ['name' => 'Adidas'],
            ['name' => 'Puma'],
        ];

        foreach ($caregories as $category) {
            Categories::create($category);
        }
    }
}
