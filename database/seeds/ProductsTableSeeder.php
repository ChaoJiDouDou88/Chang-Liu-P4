<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 1',
            'description' => 'This is the description of product 1',
            'price' => 10.00,
            'imageUrl' => '19.png',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 2',
            'description' => 'This is the description of product 2',
            'price' => 11.00,
            'imageUrl' => '4.png',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 3',
            'description' => 'This is the description of product 3',
            'price' => 12.00,
            'imageUrl' => '4.png',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 4',
            'description' => 'This is the description of product 4',
            'price' => 12.00,
            'imageUrl' => '4.png',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 5',
            'description' => 'This is the description of product 5',
            'price' => 12.00,
            'imageUrl' => '4.png',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 6',
            'description' => 'This is the description of product 6',
            'price' => 12.00,
            'imageUrl' => '4.png',
        ]);
    }
}
