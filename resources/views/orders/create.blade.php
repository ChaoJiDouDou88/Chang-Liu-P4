@extends('layouts.master')

@section('title')
    Place Order Pace
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    {{-- <link href="/css/p4.css" type='text/css' rel='stylesheet'> --}}
@stop

@section('content')

    <h1>Please select your product</h1>

    @include('errors')

    <form method='POST' action='/orders/create' enctype="multipart/form-data">

		@foreach($products as $product)
	        <div>
	            <h2>{{ $product->name }}</h2>
	        </div>
			<div class='form-group'>
	            <label>* Quantity:</label>
	            <input
	                type='integer'
	                id='quantity'
	                name='quantity'
	                value='{{ 0 }}'
	            >
	        </div>
	    @endforeach

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>* ContactEmail:</label>
            <input
                type='text'
                id='contactEmail'
                name='contactEmail'
            >
        </div>

        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    {{-- <script src="/js/books/create.js"></script> --}}
@stop
