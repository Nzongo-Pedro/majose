<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            ['id_category' => 1, 'id_subcategory' => 1, 'id_brand' => 2, 'id_size' => 2, 'id_color' => 1, 'id_gender' => 2, 'id_old' => 4, 'name' => 'Camisa da Akatsuki', 'price' => '20000', 'discount' => '15%', 'description' => 'granda cena para festas'],
            ['id_category' => 2, 'id_subcategory' => 1, 'id_brand' => 2, 'id_size' => 2, 'id_color' => 3, 'id_gender' => 1, 'id_old' => 1, 'name' => 'Turks', 'price' => '40000', 'discount' => '15%', 'description' => 'granda cena para festas'],
            ['id_category' => 1, 'id_subcategory' => 1, 'id_brand' => 1, 'id_size' => 1, 'id_color' => 2, 'id_gender' => 1, 'id_old' => 2, 'name' => 'Camisa de Natal', 'price' => '20000', 'discount' => '15%', 'description' => 'granda cena para festas']
        ];

        foreach ($produtos as $produto) {
            Products::create($produto);
        }
    }
}
