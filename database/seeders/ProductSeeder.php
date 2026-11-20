<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $foods = [
            'Nasi Goreng', 'Mie Ayam', 'Sate Ayam', 'Bakso', 'Soto Ayam',
            'Rendang', 'Gado-Gado', 'Burger', 'Pizza', 'Hot Dog',
            'Fried Chicken', 'Steak', 'Ramen', 'Sushi', 'Dimsum',
            'Keripik Singkong', 'Cokelat', 'Donat', 'Roti Bakar', 'Pisang Goreng',
        ];

        $descriptions = [
            'Dibuat dari bahan segar pilihan',
            'Rasa gurih dan bumbu meresap',
            'Cocok untuk makan siang',
            'Favorit pelanggan setiap hari',
            'Disajikan hangat dengan sambal khas',
        ];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'name_product'  => $faker->randomElement($foods),
                'stock_product' => $faker->numberBetween(1, 50),
                'price_product' => $faker->numberBetween(5000, 100000),
                'desc_product'  => $faker->randomElement($descriptions),
                'id_category'   => $faker->numberBetween(1, 3),
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}