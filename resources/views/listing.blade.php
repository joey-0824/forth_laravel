@extends('layout')
@section('content')
@include('partials._search')

<h1>Listing</h1>

<h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p>

@endsection
