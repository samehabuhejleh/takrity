@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('portfolio.dash')}}" class="btn btn-primary">all portfolios</a>
    <br><br></span>   product name : {{$portfolio->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <div class="form-group">
        <img src="{{URL::asset($portfolio->image)}}" alt=" {{$portfolio->image}}"
        style="width: 100px;height:100px;">


    </div>
    <br>
    <div class="form-group">
          {!! $portfolio->description !!}
    </div>
</div>


@endsection
