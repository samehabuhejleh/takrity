@extends('layout.layouts')

@section('contant')
<div class="img_news">
    <img src="{{URL::asset('images/electrical-measurements-with-multimeter-tester_179755-9114.png')}}"
    id="img_news">
</div>

<div class="container">
 <h1 id="news">News</h1>

 <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search" id="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

 <div class="row news">
    <div class="col-md-5">
      <img src="{{URL::asset('images/Path 103.png')}}" id="img_news_toppost">
      <h2 id="top_post">TOP POST</h2>
      @foreach ( $news as $item )
     <a href="{{route('news_details',$item->id)}}"id="a_news"> <h3 id='lorem'>{{$item->title}} <br>
          sit amet</h3></a>
      <a href="{{route('news_details',$item->id)}}"id="a_news"><h4 id='lorem'>{{$item->date,}}</h4></a>

      @endforeach
    </div>
    @foreach ( $news as $item )


    <div class="col-md-3 card">
       <a href="{{route('news_details',$item->id)}}" id="a_news"> <img src="{{URL::asset($item->image)}}" id="imgnn" ></a>
         <a href="{{route('news_details',$item->id)}}"id="a_news"><h4 id="date">{{$item->date}}</h4></a>
         <a href="{{route('news_details',$item->id)}}"id="a_news"> <h3 id="Lorem-ipsum">{{$item->title}}</h3></a>
    </div>
    @endforeach
 </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
