@php
    $kids;
@endphp

@extends('template.template')

@section('title')
    Kids
@endsection

@section('content')
<div style="background-color: darkgray; width: auto; padding: 10px; margin: 5px 0; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: white; width: 100%; padding: 15px">
        @include('template.oneGenreOnly', ['collection' => $kids, 'title' => 'Kids'] )
    </div>
</div>
@endsection
