@extends('layout.layouts')

@section('contant')
<div class="img_products_2">
    <img src="{{URL::asset('images/electrical-measurements-with-multimeter-tester_179755-4250 (1).png')}}"
    id="img_products_2">
</div>
<div class="container">
    <h1 id="Low-Voltage">Low Voltage Products • Modular Din-Rail Products</h1>

    <div class="row product2">
        @foreach (  $products2 as $item )


        <div class="col-md-4">
           <a href="{{route('products3',$item->id)}}" id="a1"> <img src="{{URL::asset($item->image2)}}" ></a>
           <a href="{{route('products3',$item->id)}}"id="a1"> <h1 id="tit_product_2">{{$item->title2}}</h1></a>
        </div>
        @endforeach
    </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
