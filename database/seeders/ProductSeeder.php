<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iphone 13',
                'description' => 'Mobile Phone Apple',
                'amount' => 980
            ],
            [
                'name' => 'ipad pro 11',
                'description' => 'Tablet Apple',
                'amount' => 850
            ],
            [
                'name' => 'Playstation 5',
                'description' => 'Videoconsloe',
                'amount' => 540
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'amount' => $product['amount']
            ]);
        }
    }
}
