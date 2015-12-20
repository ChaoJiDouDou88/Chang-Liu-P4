@extends('layouts.master')

@section('title')
    Create Product Page
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

    <h1>Add a new product</h1>

    @include('errors')

    <form method='POST' action='/products/create' enctype="multipart/form-data">

        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

        <div class='form-group'>
            <label>* Name:</label>
            <input
                type='text'
                id='name'
                name='name'
                value='{{ old('name','Please fill in Product name') }}'
            >
        </div>

        <div class='form-group'>
            <label for='Price'>* Price:</label>
            <input
                type='float'
                id='price'
                name="price"
                value='{{ old('price','8.00') }}'
            >
        </div>
{{--
        <div class='form-group'>
            <label for='imageUrl'>* Image (URL):</label>
            <input
                type='text'
                id='imageUrl'
                name="imageUrl"
                value='{{ old('imageUrl','http://prodimage.images-bn.com/pimages/9780394800165_p0_v4_s118x184.jpg') }}'
                >
        </div>
--}}
        <div class='form-group'>
            <label for='Description'>Description:</label>
            <input
                type='text'
                id='description'
                name="description"
                value='{{ old('description','Please descript this product here') }}'
                >
        </div>

        <div class='form-group'>
            <label for='imageUrl'>* Image (URL):</label>
            <input
                type='file'
                id='imageUrl'
                name="imageUrl"
                value=''
                >
        </div>


        <button type="submit" class="btn btn-primary">Add Product</button>
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
