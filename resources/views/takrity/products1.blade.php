@extends('layout.layouts')

@section('contant')
<div class="img_product_1">
    <img src="{{URL::asset('images/electrical-engineer-checking-electric-current-voltage-circuit-breaker-air-handling-unit-ahu-starter-control-panel-air-conditioner_101448-1901.png')}}"
    id="img_product_1">
</div>

<div class="container">
    <h1 id="Products-Low">Products - Low Voltage Products</h1>

    <div class="row product_1">
        <div class="col-md-6">
            @foreach ( $products1 as $item)

            <img src="{{URL::asset($item->image)}}" id="img_product1">
        </div>
        <div class="col-md-6">
            <h1 id="tit_product_1">{{$item->title}}</h1>
            <p id="p_products_1">{{$item->description}}</p>
            <a href="{{route('products.2',$item->id)}}"><input type="submit" value="view" id="sub_product_1"></a>
        </div>
        @endforeach
    </div>

    <div id="hr">
        <hr id="hr">
    </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
