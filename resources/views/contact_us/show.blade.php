@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('contact_us.dash')}}" class="btn btn-primary">all contact_us</a>
    <br><br></span>   contact_us name : {{$contact_us->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <div class="form-group">
        <img src="{{URL::asset($contact_us->image)}}" alt=" {{$contact_us->image}}"
        style="width: 100px;height:100px;">
    </div>

</div>
@endsection
