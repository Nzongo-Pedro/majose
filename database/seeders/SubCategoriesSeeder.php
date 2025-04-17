<?php

namespace Database\Seeders;

use App\Models\SubCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            ['id_category' => 1, 'name' => 'Pumax']
        ];

        foreach ($subcategories as $subcategory) {
            SubCategories::create($subcategory);
        }
    }
}
