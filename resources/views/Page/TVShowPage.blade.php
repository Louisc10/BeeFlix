@php
    $tvshow;
@endphp

@extends('template.template')

@section('title')
    TV Show
@endsection

@section('content')
<div style="background-color: darkgray; width: auto; padding: 10px; margin: 5px 0; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: white; width: 100%; padding: 15px">
        @include('template.oneGenreOnly', ['collection' => $tvshow, 'title' => 'TVShow'] )
    </div>
</div>
@endsection
