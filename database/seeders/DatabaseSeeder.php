<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                BrandsSeeder::class,
                SizesSeeder::class,
                ColorsSeeder::class,
                GendersSeeder::class,
                OldsSeeder::class,
                CategoriesSeeder::class,
                SubCategoriesSeeder::class,
                ProductsSeeder::class
            ]
        );
    }
}
