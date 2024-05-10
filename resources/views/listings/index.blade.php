@extends('layout')

@section('content')

    @include('partials._hero')
    @include('partials._search')

<div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

@foreach($listing as $item)

        <x-listing-card :item="$item" />
@endforeach
</div>

<div class="mt-6 p-4">
    {{$listing->links()}}
</div>

@endsection
