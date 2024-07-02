<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/product.json');
        $products = collect(json_decode($json));

        $products->each(function($product){
            product::create([
                "name"=>$product->name,
                "quantity"=>$product->quantity,
                "price"=>$product->price
            ]);
        });
    }
}
