@extends('template.template')

@section('title')
    Home Page
@endsection

@section('nav')
    @include('template.navbar')
@endsection

@section('content')
    @include('template.dramaOnly')
@endsection