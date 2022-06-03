@extends('layout.layouts')

@section('contant')

<div class="img_portfolio">
    <img src="{{URL::asset('images/electrical-engineer-using-digital-multi-meter-checking-electric-current-voltage-circuit-breaker_101448-1523.png')}}"
    id="img_portfolio" >
</div>

<div class="container">
    @foreach ($portfolios as $item )
    <h1 id="portfolio">{{$item->title}}</h1>
    <p id="p_portfolio">{{$item->description}}</p>
    @endforeach

</div>

<div class="container_fluid con_portfolio">
 <div class="container">
     <div class="row">
        @foreach ($portfolios as $item )
         <div class="col-md-6">
             <img src="{{URL::asset($item->image)}}" id="img_down">
         </div>
         @endforeach
         <div class="col-md-6">
             <h3 id="download">Download</h3>
         </div>
     </div>
 </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
