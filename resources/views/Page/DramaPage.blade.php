@php
    $drama;
@endphp

@extends('template.template')

@section('title')
    Drama
@endsection

@section('nav')
    @include('template.navbar')
@endsection

@section('content')
    @include('template.oneGenreOnly', ['collection' => $drama, 'title' => 'Drama'] )
@endsection
