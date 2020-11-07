@php
    $item;
@endphp

@extends('template.template')

@section('title')
    Home Page
@endsection

@section('nav')
    @include('template.navbar')
@endsection

@section('content')
<div style="width: 100%; height: 250px;">
    <img src="{{ URL::to('/') }}/assets/{{ $item['photo'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%;">
</div>
<div style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center; text-align: center">
    {{ $item['title'] }}
</div>
<div style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center; text-align: center">
    {{ $item['description'] }}
</div>
@endsection
