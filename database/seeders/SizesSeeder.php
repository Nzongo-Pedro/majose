<?php

namespace Database\Seeders;

use App\Models\Sizes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            ['name' => 'largo', 'code' => 'M'],
            ['name' => 'curto', 'code' => 'L'],
            ['name' => 'Grande', 'code' => 'XL'],
            ['name' => 'Maior', 'code' => 'XXL'],
        ];

        foreach ($sizes as $size) {
            Sizes::create($size);
        }
    }
}
