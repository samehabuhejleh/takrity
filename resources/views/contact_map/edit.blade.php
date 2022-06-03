@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('contact_us.map.dash')}}" class="btn btn-primary">all contact_us_map</a>
    <br><br></span>
    contact_us_map name : {{$contact_map->lang}}</p>
    contact_us_map name : {{$contact_map->atit}}</p>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('contact_us.map.update',$contact_map->id)}}" method="POST" >
        @csrf
        @method('PUT')


        <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">lang</label>
        <input type="text" value="{{$contact_map->lang}}"class="form-control" name="lang" placeholder="lang">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">atit</label>
        <input type="text" value="{{$contact_map->atit}}"class="form-control" name="atit" placeholder="atit">
    </div>

      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">update</button>
      </div>
    </form>
</div>




@endsection
