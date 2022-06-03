@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('contact_us.dash')}}" class="btn btn-primary">all contact_us</a>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('contact_us.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="photo" class="form-label">image</label>
            <input type="file" class="form-control" name="image" >
        </div>
        <br>
        <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">title</label>
        <input type="text" class="form-control" name="title" placeholder="title">
    </div>


      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">save</button>
      </div>
    </form>
</div>




@endsection
