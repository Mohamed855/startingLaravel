@php($pageName = $product['name'])

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pagedescription')
    <p class="product">
        {{ $product['id'] }}, {{ $product['type'] }}, {{ $product['name'] }}, {{ $product['color'] }},
        {{ $product['price'] }} LE
    </p>

    <a class="edit-link" href="{{ route('products.edit', $product['id']) }}">edit product details</a>
    <form action="{{ route('products.destroy', $product['id']) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="delete-link" type="submit" value="delete this product">
    </form>
@endsection
