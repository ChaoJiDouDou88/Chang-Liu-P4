<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use p4\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /*
*/
    public function getCreate(){
        $products = \p4\Product::orderBy('id','DESC')->get();
        return view('orders.create')->with('products',$products);
    }

    public function postCreate(Request $request){

        $this->validate(
            $request,[
                'contactEmail' => 'required',
            ]
        );
        $order = new \p4\Order();
        $order->contactEmail = $request->contactEmail;
        $order->save();

        \Session::flash('flash_message','Your Order has been placed');
        return redirect('/orders/create');
    }


}
