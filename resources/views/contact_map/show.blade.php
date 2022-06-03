@extends('layouts.app')

@section('content')
<div class="container">
    <p style="padding-top:30px;"><span><a href="{{route('contact_us.map.dash')}}" class="btn btn-primary">all contact_us_map</a>

</div>
<div class="container" style="padding-top: 60px;">
    <br><br></span>   contact_us_map name : {{$contact_map->lang}}</p>
    <br><br></span>   contact_us_map name : {{$contact_map->atit}}</p>
</div>
@endsection
