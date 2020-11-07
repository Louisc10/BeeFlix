@php
    $tvshow;
@endphp

@extends('template.template')

@section('title')
    TV Show
@endsection

@section('nav')
    @include('template.navbar')
@endsection

@section('content')
    @include('template.oneGenreOnly', ['collection' => $tvshow, 'title' => 'TVShow'] )
@endsection
