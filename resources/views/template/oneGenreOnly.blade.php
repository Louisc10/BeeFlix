<div style="margin: 10px 0">
    <h3 style="font-weight: bold">
        {{ strtoupper($title) }}
    </h3>
    <div style="display: flex; flex-wrap: wrap; flex-direction: row; justify-content: flex-start;">
        @foreach ($collection as $item)
            <div style="min-width: 175px; width: 24%; height: 350px; border: 1px solid darkgray; display: flex; flex-direction: column">
                <div style="width: 100%; height: 250px;">
                    <img src="{{ URL::to('/') }}/assets/{{ $item['photo'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%;">
                </div>
                <div style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center; text-align: center">
                    {{ $item['title'] }}
                </div>
                <a href="{{ url('/view/'.$item['id'] ) }}" style="text-decoration: none">
                    <div style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center; text-align: center; background-color: black; color: white; font-weight: bold">
                        Lihat Film
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>