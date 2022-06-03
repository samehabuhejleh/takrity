@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('products2.dash')}}" class="btn btn-primary">all products2</a>
    <br><br></span>   product2 name : {{$product2->title2}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <div class="form-group">
        <img src="{{URL::asset($product2->image2)}}" alt=" {{$product2->image2}}"
        style="width: 100px;height:100px;">


    </div>
</div>

@endsection
