@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('news.dash')}}" class="btn btn-primary">all news</a>
    <br><br></span>   news title : {{$new->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">

</span>   news date : {{$new->date}}</p>

    <div class="form-group">
        <img src="{{URL::asset($new->image)}}" alt=" {{$new->image}}"
        style="width: 100px;height:100px;">


    </div>
    <br>
    <div class="form-group">
          {!! $new->description !!}
    </div>
</div>


@endsection
