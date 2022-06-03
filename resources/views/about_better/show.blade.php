@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('about.dash')}}" class="btn btn-primary">all about_better</a>
    <br><br></span>   abouts title : {{$about->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">


    <br>
    <div class="form-group">
          {!! $about->description !!}
    </div>
</div>


@endsection
