@extends('layouts.master')

@section('title')
    Show product
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/p4.css" type='text/css' rel='stylesheet'>
@stop



@section('content')

    @if(!isset($product))
        You have not specified a product
    @else
        <h1>Show product: {{ $product->name }}</h1>
        <img src="{{ URL::to('/') }}//images/{{ $product->imageUrl }}" alt="{{ $product->name }}"/>
        <p>Description: {{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <button type="submit" class="btn btn-primary">Add to Cart</button>
    @endif

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/books/show.js"></script>
@stop
