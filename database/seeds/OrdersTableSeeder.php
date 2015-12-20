<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        for($i = 0; $i < 5; $i++){
            $order = \p4\Order::create(array(
                'comments' => 'This is comment'.$i,
                'contactEmail' => 'test'.$i.'@gmail.com',
            ));
            $order->save();
            //$order->products()->attach(2,array('quantity' => 3));
            //$order->save();
            $total_price = 0.00;
            for($j = 1; $j < 3; $j++){
                $order->products()->attach($j,array('quantity' => 2));
                $total_price = $total_price + 2 * \p4\Product::find($j)->price;
            }
            $order->total_price = $total_price;
            $order->save();
        }
    }
}
