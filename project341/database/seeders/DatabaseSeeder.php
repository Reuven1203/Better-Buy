<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $default = [[
            'user_id' => '1',
            'price' => '750.00',
            'name' => 'Inspiron 14',
            'image' => 'product1.jpg',
            'brand' => 'Dell',
            'stock' => '10',
            'category' => 'Laptops',
        ], [
            'user_id' => '2',
            'price' => '1250.00',
            'name' => 'MacBook 14',
            'image' => 'product4.jpg',
            'brand' => 'Apple',
            'stock' => '10',
            'category' => 'Laptops',
        ], [
            'user_id' => '3',
            'price' => '2000.00',
            'name' => 'Mac 2021',
            'image' => 'product5.jpg',
            'brand' => 'Apple',
            'stock' => '10',
            'category' => 'Laptops',
        ], [
            'user_id' => '1',
            'price' => '1174.00',
            'name' => 'Galaxy S21',
            'image' => 'product13.jpg',
            'brand' => 'Samsung',
            'stock' => '10',
            'category' => 'Phones',
        ], [
            'user_id' => '2',
            'price' => '1593.00',
            'name' => 'iPhone 13 Pro Max',
            'image' => 'product14.jpg',
            'brand' => 'Apple',
            'stock' => '10',
            'category' => 'Phones',
        ], [
            'user_id' => '3',
            'price' => '976.00',
            'name' => 'iPhone 12',
            'image' => 'product15.jpg',
            'brand' => 'Apple',
            'stock' => '10',
            'category' => 'Phones',
        ], [
            'user_id' => '1',
            'price' => '469.99',
            'name' => 'TCL 4-Series 55"',
            'image' => 'product26.jpg',
            'brand' => 'Android',
            'stock' => '10',
            'category' => 'TV/Monitor',
        ], [
            'user_id' => '2',
            'price' => '763.99',
            'name' => 'Tizen Smart TV',
            'image' => 'product27.jpg',
            'brand' => 'Samsung',
            'stock' => '10',
            'category' => 'TV/Monitor',
        ], [
            'user_id' => '3',
            'price' => '1513.99',
            'name' => 'The Frame 55"',
            'image' => 'product28.jpg',
            'brand' => 'Samsung',
            'stock' => '10',
            'category' => 'TV/Monitor',
        ], [
            'user_id' => '1',
            'price' => '170.44',
            'name' => 'Galaxy Tab A7 Lite 8.7"',
            'image' => 'product29.jpg',
            'brand' => 'Samsung',
            'stock' => '10',
            'category' => 'Tablets',
        ], [
            'user_id' => '2',
            'price' => '430.44',
            'name' => ' iPad 10.2"',
            'image' => 'product30.jpg',
            'brand' => 'Apple',
            'stock' => '10',
            'category' => 'Tablets',
        ], [
            'user_id' => '3',
            'price' => '949.99',
            'name' => 'iPad Air 10.9"',
            'image' => 'product31.jpg',
            'brand' => 'Apple',
            'stock' => '10',
            'category' => 'Tablets',
        ]];
        DB::table('products')->insert($default);
    }
}
