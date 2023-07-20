@php($pageName = 'Products')

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pageTitle')
    @php(print $pageName)
@endsection

@section('pagedescription')
    @if (count($products) > 0)
        <ul>
            @foreach ($products as $product)
                <a href="{{ route('products.show', ['product' => $product['id']]) }}">
                    <li class="product">
                        {{ $product['id'] }}, {{ $product['type'] }}, {{ $product['name'] }}, {{ $product['color'] }},
                        {{ $product['price'] }} LE</li>
                </a>
            @endforeach
        </ul>
    @else
        This is no @php(print $pageName) yet
    @endif

    <a class="new-product-link" href="{{ route('products.create') }}">add new product</a>
@endsection
