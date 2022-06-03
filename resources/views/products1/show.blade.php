@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('products1.dash')}}" class="btn btn-primary">all products1</a>
    <br><br></span>   product1 name : {{$product1->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <div class="form-group">
        <img src="{{URL::asset($product1->image)}}" alt=" {{$product1->image}}"
        style="width: 100px;height:100px;">


    </div>
    <br>
    <div class="form-group">
          {!! $product1->description !!}
    </div>
</div>


@endsection
