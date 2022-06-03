@extends('layout.layouts')

@section('contant')
<div class="img_products_3">
    <img src="{{URL::asset('images/electrical-engineer-checking-electric-current-voltage-circuit-breaker-air-handling-unit-ahu-starter-control-panel-air-conditioner_101448-1901.png')}}"
    id="img_products_3">
</div>

<div class="container">
    <h1>Low Voltage Products • Modular Din-Rail Products • Miniature Circuit</h1>

    <div class="img_tit">
        @foreach ($products3 as $item)
        <img src="{{URL::asset($item->image3)}}" >
        <h1>Miniature Circuit Breakers, {{$item->title3}}</h1>
        @endforeach
    </div>

    <div class="row product_3">
        @foreach ($products3 as $item)

        <div class="col-md-6">
            <img src="{{URL::asset($item->image3)}}" id="img_product3">
        </div>
        <div class="col-md-6">
            <h1 id="tit_product_3"> {{$item->title3}}</h1>
            <p id="p_products_3">{{$item->description3}}</p>

        </div>
        @endforeach
    </div>

    <div class="hr">
        <hr id="hr">
    </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
