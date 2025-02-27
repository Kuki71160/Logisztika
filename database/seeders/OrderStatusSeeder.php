<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('order_statuses')->insert([
            ['name' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Shipped', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Delivered', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
