<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function($table) {
            # Increments method will make a Primary, Auto-Incrementing field.
            # Most tables start off this way
			$table->increments('id');

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
			$table->timestamps();
            # The rest of the fields...

            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity')->unsigned();

            #associate foreign keys
			$table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_product');
    }
}
