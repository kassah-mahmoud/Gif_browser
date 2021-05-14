@props(['data' => []])

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 lg:gap-x-3 gap-y-5">
    @foreach ($data as $gif)
        @php
            $showData = $gif['images']['preview_gif'];
        @endphp
        <a class="w-full rounded-md" href={{"/gifs/".$gif['id']}}>
            <img class="w-full rounded-md" src="{{$showData['url']}}" alt="{{$gif['title']}}" width="{{(int)$showData['width']}}">
        </a>
    @endforeach
</div>