@php
    $item;
    $category;
    $collection;
@endphp

@extends('template.template')

@section('title')
    Home Page
@endsection

@section('content')
<div style="background-color: darkgray; width: auto; padding: 10px; margin: 5px 0; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: white; width: 100%; padding: 15px; display: flex; flex-wrap: wrap; justify-content: center;align-items: center; flex-direction: row">
        <div style="width: 100%; max-width: 300px; height: 250px;">
            <img src="{{ URL::to('/') }}/assets/{{ $item['photo'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%;">
        </div>

        <div style="width: 400px; margin: 20px 20px; display: flex;flex-direction: column; justify-content: center; align-items: center;">
            <div style="margin: 10px 0; display: flex;flex-direction: column; justify-content: center; align-items: center; text-align: center; font-weight: bold; font-size: 18px">
                {{ $item['title'] }}
                <div style="width: 150px; display: flex; justify-content: space-between; align-items: center; text-align: center; font-weight: bold; font-size: 18px;">
                    @for ($i = 0; $i < $item['rating']; $i++)
                    <span class="fa fa-star" style="color:yellow; background-color:darkgrey; padding: 5px; border-radius: 50px"></span>
                    @endfor
                    @for ($i = $item['rating']; $i < 5; $i++)
                    <span class="fa fa-star" style="background-color:darkgrey; padding: 5px; border-radius: 50px"></span>
                    @endfor
                </div>
            </div>
            <div style="width: 95%; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center">
                <div style="color: grey;">
                    Description
                </div>
                {{ $item['description'] }}
            </div>
            <div>
                Kategori: <a href="{{ URL::to('/'.$category) }}"  style="color: #5adbbd; text-decoration: none">{{ $item['name'] }}</a>
            </div>
        </div>
        <div style="width: 400px; height: 250px; font-size: 12px">
            <div style="font-size: 16px; font-weight: bold;">
                Episode
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Episode</th>
                    <th scope="col">Judul</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        <tr>
                        <td>Episode {{$item['episode']}}</td>
                        <td>{{$item['title']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="display: flex; justify-content: center; align-items: center;">
                {{ $collection->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
