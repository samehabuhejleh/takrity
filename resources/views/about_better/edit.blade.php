@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('about.dash')}}" class="btn btn-primary">all about_better</a>
    <br></span>
    about_better name : {{$about->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('about.dash.update',$about->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">title</label>
        <input type="text" value="{{$about->title}}"class="form-control" name="title" placeholder="title">
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea class="form-control" name="description" rows="3">
            {!! $about->description !!}
        </textarea>
      </div>


      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">update</button>
      </div>
    </form>
</div>




@endsection
