<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products() {

		return $this->belongsToMany('\p4\Product')->withTimestamps();;
	}
}
