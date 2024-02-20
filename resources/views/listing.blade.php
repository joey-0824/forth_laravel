<h1>{{$title}}</h1>

@foreach($listing as $item)
    <h2>{{$item['title']}}</h2>
    <p>{{$item['description']}}</p>
@endforeach
