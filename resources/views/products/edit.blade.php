@php($pageName = 'edit ' . $product->name . ' details')

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pagedescription')
    <div class="flex justify-center">
        <form class="form bg-white" action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-container">
                <label for="product-type">Product Type</label>
                <br>
                <input id="product-type" name="product-type" value="{{ $product->type }}" type="text">
                @error('product-type')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label for="product-name">Product Name</label>
                <br>
                <input id="product-name" name="product-name" value="{{ $product->name }}" type="text">
                @error('product-name')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label for="product-color">Product Color</label>
                <br>
                <input id="product-color" name="product-color" value="{{ $product->color }}" type="text">
                @error('product-color')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <label for="product-price">Product Price</label>
                <br>
                <input id="product-price" name="product-price" value="{{ $product->price }}" type="text">
                @error('product-price')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-container">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
