<?php

namespace Database\Seeders;

use App\Models\Genders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            [
                'gender' => 'Feminino',
                'code' => 'F'
            ],
            [
                'gender' => 'Masculino',
                'code' => 'M'
            ],
        ];

        foreach ($genders as $gender) {
            Genders::create($gender);
        }
    }
}
