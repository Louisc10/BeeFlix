{{-- @php
    $collection = [
        [
            'genre_id' => '1',
            'title' => 'The Legend of the Blue Sea',
            'photo' => 'drama/1.jpg',
            'description' => 'A mermaid from the Joseon period ends up in present-day Seoul, where she crosses paths with a swindler who may have ties to someone from her past.',
            'rating' => '5',
        ],
        [
            'genre_id' => '1',
            'title' => 'While You Were Sleeping',
            'photo' => 'drama/2.jpg',
            'description' => 'Burdened with visions of the future in their dreams, a young woman and two men try to prevent horrible events before they actually happen.',
            'rating' => '4',
        ],
        [
            'genre_id' => '1',
            'title' => 'Prison Playbook',
            'photo' => 'drama/3.jpg',
            'description' => 'With his major league baseball debut right around the corner, a star pitcher lands in prison and must learn to navigate his new world.',
            'rating' => '5',
        ],
        [
            'genre_id' => '1',
            'title' => 'When the Camellia Blooms',
            'photo' => 'drama/4.jpg',
            'description' => 'Dongbaek is a single mother. When a potential new love enters her life, she finds ways to defy the social stigmas surrounding her.',
            'rating' => '4',
        ],
    ]
@endphp --}}

<div>
    <div>
        {{ $title }}
    </div>
    <div style="display: flex; flex-wrap: wrap; flex-direction: row; justify-content: flex-start;">
        @foreach ($collection as $item)
            <div style="min-width: 175px; width: 20%; height: 300px; border: 1px solid darkgray; display: flex; flex-direction: column">
                <div style="width: 100%; height: 250px;">
                    <img src="assets/{{ $item['photo'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%;">
                </div>
                <div style="width: 100%; height: 50px; display: flex; justify-content: center; align-items: center; text-align: center">
                    {{ $item['title'] }}
                </div>
            </div>
        @endforeach
    </div>
</div>