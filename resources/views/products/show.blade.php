@php($pageName = $product['name'])

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pageTitle')
    @php(print $pageName)
@endsection

@section('pagedescription')
    <p class="product">
        {{ $product['id'] }}, {{ $product['type'] }}, {{ $product['name'] }}, {{ $product['color'] }},
        {{ $product['price'] }} LE
    </p>
@endsection
