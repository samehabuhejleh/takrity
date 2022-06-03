@extends('layout.layouts')

@section('contant')
<div class="img_news_details">
    <img src="{{URL::asset('images/news_details.png')}}" id="img_news_details">
</div>

<div class="container">
    <h1 id="news_det">News</h1>
    @foreach ($newsdet as $item)
    <div class="news1">



        <img src="{{URL::asset($item->image)}}" id="img_news_det">
        <h3 id="tit_news_details">{{$item->title}}</h3>
        <h4 id="date_news_details">{{$item->date}}</h4>
        <p id="p_news_details">{{$item->description}}</p>
                   @endforeach
    </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
