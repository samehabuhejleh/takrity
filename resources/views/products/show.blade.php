@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('products.dash')}}" class="btn btn-primary">all products</a>
    <br><br></span>   product name : {{$product->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <div class="form-group">
        <img src="{{URL::asset($product->image)}}" alt=" {{$product->image}}"
        style="width: 100px;height:100px;">


    </div>
    <br>
    <div class="form-group">
          {!! $product->description !!}
    </div>
</div>


@endsection
