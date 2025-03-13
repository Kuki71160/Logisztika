<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Supplier::insert([
            [
                'name' => 'Peter',
                'contact_phone' => '06306021036',
                'contact_email' =>  'asd@asd.com'
            ]
        ]);

        Category::insert([
            [
                'name' => 'Electronics',
            ]
        ]);

        Product::insert([
            [
                'name' => 'Laptop',
                'category_id' => 1,
                'supplier_id' => 1,
                'price' => 1200.00,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
