@extends('layout.layouts')

@section('contant')
<div class="img_about">
    <img src="{{URL::asset('images/electrical-engineer-using-digital-multi-meter-checking-electric-current-voltage-circuit-breaker_101448-1523.png')}}" id="img_about">
    <div class="container">
        <p id="p_about">With so much daily dependence on electricity, the power supply must be maintained at all costs…</p>
    </div>
</div>

<div class="container">
    <h1 id="tit_about">What Makes Us Better ?</h1>
    <div class="row better">
        @foreach ($aboutbetters as $item )
        <div class="col-md-6">
            <h1 id="tit_better">{{$item->title}}</h1>
            <p id="p_better">{{$item->description}}</p>
        </div>
        @endforeach

    </div>
</div>

<div class="container">
    <hr id="hr">
</div>

<div class="container">
    <h1 id="meet">Meet The Team</h1>
     <div class="row person">
        @foreach ($aboutmeets as $item )
         <div class="col-md-3">
             <img src="{{URL::asset($item->image)}}" >
             <h1 id="tit_name">{{$item->name}}</h1>
             <h5 id="major">{{$item->major}}</h5>
             <p id="des_person">{{$item->description}}</p>
         </div>
         @endforeach
     </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
