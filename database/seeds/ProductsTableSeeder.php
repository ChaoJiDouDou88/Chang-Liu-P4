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
            'imageUrl' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 2',
            'description' => 'This is the description of product 2',
            'price' => 11.00,
            'imageUrl' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
        ]);

        DB::table('products')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'product 3',
            'description' => 'This is the description of product 3',
            'price' => 12.00,
            'imageUrl' => 'http://img2.imagesbn.com/p/9780743273565_p0_v4_s114x166.JPG',
        ]);
    }
}
