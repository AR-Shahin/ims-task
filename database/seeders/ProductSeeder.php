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
        $products = ["A","B","C","D","E"];

        foreach($products as $product){
            Product::create([
                "name" => $product,
                "price" => rand(50,150),
                "quantity" => rand(10, 50),
            ]);
        }
    }
}