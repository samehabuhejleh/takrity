@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('products1.dash')}}" class="btn btn-primary">all products1</a>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('product1.dash.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <select name="user_id" >
            @foreach ( $products as $item)
            <option value="{{$item->id}}">{{$item->title}}</option>
            @endforeach
        </select>
         <br><br>
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
        <label for="content" class="form-label">description</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
      </div>


      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">save</button>
      </div>
    </form>
</div>




@endsection
