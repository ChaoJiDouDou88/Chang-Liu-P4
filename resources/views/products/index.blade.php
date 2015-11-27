@extends('layouts.master')

@section('title')
    All products
@stop

@section('content')

    <h1>All Products</h1>

    @foreach($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <a href='/products/edit/{{$product->id}}'>Edit</a><br>
            <a href='/products/show/{{$product->id}}'>View</a><br>
            <img src="{{ URL::to('/') }}//images/{{ $product->imageUrl }}" alt="{{ $product->name }}"/>
        </div>
    @endforeach

@stop
