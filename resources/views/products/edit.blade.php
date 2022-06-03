@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('products.dash')}}" class="btn btn-primary">all products</a>
    <br></span>
           product name : {{$product->title}}</p>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control" name="image" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">title</label>
        <input type="text" value="{{$product->title}}"class="form-control" name="title" placeholder="title">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="form-label">description</label>
        <textarea class="form-control" name="description" rows="3">
            {!! $product->description !!}
        </textarea>
      </div>


      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">update</button>
      </div>
    </form>
</div>




@endsection
