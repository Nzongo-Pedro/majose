<?php

namespace Database\Seeders;

use App\Models\Olds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $olds = ['Crianças', 'Adolescentes', 'Jovens', 'Adultos'];

        foreach ($olds as $old) {
            Olds::creat(['name' => $old]);
        }
    }
}
