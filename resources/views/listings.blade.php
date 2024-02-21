<h1>{{$title}}</h1>

@foreach($listing as $item)
    <h2>
        <a href="/listings/{{$item['id']}}">{{$item['title']}}</a>
    </h2>
    <p>{{$item['description']}}</p>
@endforeach
