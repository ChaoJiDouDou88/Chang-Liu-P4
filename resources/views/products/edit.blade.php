@extends('layouts.master')

@section('title')
    Edit Book
@stop


@section('content')

    <h1>Edit</h1>

    @include('errors')

    <form method='POST' action='/products/edit'>

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <input type='hidden' name='id' value='{{ $product->id }}'>

        <div class='form-group'>
            <label>* Name:</label>
            <input
                type='text'
                id='name'
                name='name'
                value='{{$product->name}}'
            >
        </div>

        <div class='form-group'>
            <label for='imageUrl'>* Image Url:</label>
            <input
                type='text'
                id='imageUrl'
                name="imageUrl"
                value='{{$product->imageUrl}}'
                >
        </div>

        <div class='form-group'>
            <label for='price'>Price:</label>
            <input
                type='text'
                id='price'
                name="price"
                value='{{$product->price}}'
                >
        </div>

        <div class='form-group'>
            <label for='description'>* Description:</label>
            <input
                type='text'
                id='description'
                name='description'
                value='{{$product->description}}'
                >
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>

@stop
