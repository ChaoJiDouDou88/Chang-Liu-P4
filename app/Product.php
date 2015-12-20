<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders() {

		return $this->belongsToMany('\p4\Order', 'order_product','order_id', 'product_id')->withPivot('quantity');
	}
}
