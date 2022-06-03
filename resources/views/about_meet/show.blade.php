@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('about.meet.dash')}}" class="btn btn-primary">all about_meet</a>
    <br><br></span>   aboutmeets name : {{$aboutmeet->name}}</p>
</div>
<div class="container" style="padding-top: 60px;">

    <div class="form-group">
        <img src="{{URL::asset($aboutmeet->image)}}" alt=" {{$aboutmeet->image}}"
        style="width: 100px;height:100px;">
    </div>
    <br>
    <p>{{$aboutmeet->major}}</p>
    <div class="form-group">
          {!! $aboutmeet->description !!}
    </div>
</div>


@endsection
