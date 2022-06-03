@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('contact_us.map.dash')}}" class="btn btn-primary">all contact_us_map</a>
</div>
<div class="container" style="padding-top: 60px;">
    <form action="{{route('contact_us.map.store')}}" method="POST" >
        @csrf

        <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">lang</label>
        <input type="text" class="form-control" name="lang" placeholder="lang">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">atit</label>
        <input type="text" class="form-control" name="atit" placeholder="atit">
    </div>

      <div class="form-group">
          <button type="submit" class="btn btn-primary" style="margin-top: 30px;width:150px;">save</button>
      </div>
    </form>
</div>




@endsection
