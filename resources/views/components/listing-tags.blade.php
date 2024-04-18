@props(['tagsString'])
@php
$tagsArray = explode(',', $tagsString);
@endphp


<ul class="flex">
    @foreach($tagsArray as $tagItem)
        <li
            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
        >
            <a href="/?tag={{$tagItem}}">{{$tagItem}}</a>
        </li>
    @endforeach
</ul>
