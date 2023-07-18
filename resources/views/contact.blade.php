@php($pageName = 'Contact')

@extends('layout/siteLayout')

@section('title')
    @php(print($pageName))
@endsection

@section('pageTitle')
    @php(print($pageName))
@endsection

@section('pagedescription')
    This is our @php(print($pageName)) page
@endsection
