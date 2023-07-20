@php($pageName = 'Add new product')

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pageTitle')
    @php(print $pageName)
@endsection

@section('pagedescription')
    <div class="flex justify-center">
        <form action="{{ route('products.store') }}" method="post" class="form bg-white">
            @csrf
            <div class="input-container">
                <label for="product-type">Product Type</label>
                <br>
                <input id="product-type" name="product-type" type="text">
            </div>

            <div class="input-container">
                <label for="product-name">Product Name</label>
                <br>
                <input id="product-name" name="product-name" type="text">
            </div>

            <div class="input-container">
                <label for="product-color">Product Color</label>
                <br>
                <input id="product-color" name="product-color" type="text">
            </div>

            <div class="input-container">
                <label for="product-price">Product Price</label>
                <br>
                <input id="product-price" name="product-price" type="text">
            </div>

            <div class="input-container">
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
@endsection
