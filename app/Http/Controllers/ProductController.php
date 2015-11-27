<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use p4\Http\Requests;
use p4\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $products = \p4\Product::orderBy('id','DESC')->get();
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        return view('products.create');
    }
    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate(Request $request) {
        $this->validate(
            $request,
            [
                'name' => 'required|min:5',
                'description' => 'required|min:5',
                //'imageUrl' => 'required|url',
                'imageUrl' => 'required',
                'price' => 'required|min:4',
              ]
        );
        // Code here to enter book into the database
        $product = new \p4\Product();
        echo $request;
        $product->name = $request->name;
        $product->price = $request->price;
        //$book->author_id = 1;
        //$product->imageUrl = $request->imageUrl;
        $product->description = $request->description;
        $product->save();

        $imageName = $product->id . '.' .
            $request->file('imageUrl')->getClientOriginalExtension();
        $request->file('imageUrl')->move(base_path() .
            '/public/images/', $imageName);
        $product->imageUrl = $imageName;
        $product->save();
        // Confirm book was entered:
        //return 'Process adding new book: '.$request->input('title');
        //return view()
        \Session::flash('flash_message','Your product was added!');
        return redirect('/products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id = null)
    {
        $product = \p4\Product::find($id);
        if(is_null($product)) {
            \Session::flash('flash_message','Can not find this product');
            return redirect('/products');
        }
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id = null)
    {
        $product = \p4\Product::find($id);
        if(is_null($product)) {
            \Session::flash('flash_message','Product not found.');
            return redirect('/products');
        }

        //return view('books.edit')->with(['book'=>$book, 'authors_for_dropdown' => $authors_for_dropdown]);

        return view('products.edit')->with('product',$product);
    }
    /**
    * Responds to requests to POST /books/edit
    */
    public function postEdit(Request $request) {
        // Validation
        $product = \p4\Product::find($request->id);
        $product->name = $product->name;
        //$book->author_id = $request->author;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->imageUrl = $request->imageUrl;
        $product->save();
        \Session::flash('flash_message','Your product information was updated.');
        return redirect('/products/edit/'.$request->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
