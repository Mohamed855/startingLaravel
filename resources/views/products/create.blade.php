@php($pageName = 'Add new product')

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pagedescription')
    <div class="flex justify-center">
        <form action="{{ route('products.store') }}" method="post" class="form bg-white">
            @csrf
            <div class="input-container">
                <label for="product-type">Product Type</label>
                <br>
                <input id="product-type" name="product-type" value="{{ old('product-type') }}" type="text">
                @error('product-type')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label for="product-name">Product Name</label>
                <br>
                <input id="product-name" name="product-name" value="{{ old('product-name') }}" type="text">
                @error('product-name')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label for="product-color">Product Color</label>
                <br>
                <input id="product-color" name="product-color" value="{{ old('product-color') }}" type="text">
                @error('product-color')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label for="product-price">Product Price</label>
                <br>
                <input id="product-price" name="product-price" value="{{ old('product-price') }}" type="text">
                @error('product-price')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <button type="submit">Add</button>
            </div>
        </form>
    </div>
@endsection
