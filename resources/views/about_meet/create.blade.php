@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('about.meet.dash')}}" class="btn btn-primary">all about_meet</a>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('about.meet.dash.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="photo" class="form-label">image</label>
            <input type="file" class="form-control" name="image" >
        </div>
        <br>
        <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" class="form-control" name="name" placeholder="name">
    </div>

      <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">major</label>
        <input type="text" class="form-control" name="major" placeholder="major">
    </div>


    <div class="form-group">
        <label for="content" class="form-label">description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
      </div>


      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">save</button>
      </div>
    </form>
</div>




@endsection
