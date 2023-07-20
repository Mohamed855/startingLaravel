@php($pageName = 'About')

@extends('layout/siteLayout')

@section('title')
    @php(print $pageName)
@endsection

@section('pagedescription')
    This is our @php(print $pageName) page
@endsection
