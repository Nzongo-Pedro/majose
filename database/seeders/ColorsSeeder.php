<?php

namespace Database\Seeders;

use App\Models\Colors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'Preta', 'code' => '#000'],
            ['name' => 'Vermelha', 'code' => '#f00'],
            ['name' => 'Verde', 'code' => '#0f0'],
            ['name' => 'Azul', 'code' => '#00f']
        ];

        foreach ($colors as $color) {
            Colors::create($color);
        }
    }
}
