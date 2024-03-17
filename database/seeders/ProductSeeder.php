<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $products = array(
            array(
                'product_code' => 'P001',
                'product_name' => 'Product 1',
                'product_price' => 100,
                'product_description' => 'Product 1 Description',
                'product_image' => 'product1.jpg',
                'product_stock' => 100,
            ),
            array(
                'product_code' => 'P002',
                'product_name' => 'Product 2',
                'product_price' => 200,
                'product_description' => 'Product 2 Description',
                'product_image' => 'product2.jpg',
                'product_stock' => 200,
            ),
            array(
                'product_code' => 'P003',
                'product_name' => 'Product 3',
                'product_price' => 300,
                'product_description' => 'Product 3 Description',
                'product_image' => 'product3.jpg',
                'product_stock' => 300,
            ),
        );
        DB::table('products')->insert($products);
    }
}