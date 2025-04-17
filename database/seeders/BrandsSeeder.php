<?php

namespace Database\Seeders;

use App\Models\Brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Puma'],
            ['name' => 'Adidas'],
        ];

        foreach ($brands as $brand) {
            Brands::creat($brand);
        }
    }
}
