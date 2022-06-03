@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('products3.dash')}}" class="btn btn-primary">all products3</a>
    <br><br></span>   product3 name : {{$product3->title3}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <div class="form-group">
        <img src="{{URL::asset($product3->image3)}}" alt=" {{$product3->image3}}"
        style="width: 100px;height:100px;">


    </div>
    <br>
    <div class="form-group">
          {!! $product3->description3 !!}
    </div>
</div>

@endsection
