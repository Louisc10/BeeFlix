@php
    $kids;
@endphp

@extends('template.template')

@section('title')
    Kids
@endsection

@section('nav')
    @include('template.navbar')
@endsection

@section('content')
    @include('template.oneGenreOnly', ['collection' => $kids, 'title' => 'Kids'] )
@endsection
