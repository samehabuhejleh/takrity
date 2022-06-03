@extends('layout.layouts')

@section('contant')
<div class="img_product">
    <img src="{{URL::asset('images/el.png')}}" id="img_product">
</div>

<div class="container">
    <h1 id="products">products</h1>
</div>
<div class="container">
    @foreach ($products as $item )
    <div class="row product">

        <div class="col-md-6">
            <img src="{{URL::asset($item->image)}}" id="img_product1">
        </div>
        <div class="col-md-6">
            <h1 id="tit_product">{{$item->title}}</h1>
            <p id="p_products">{{$item->description}}</p>
            <a href="{{route('products.1',$item->id)}}"><input type="submit" value="view" id="sub_product"></a>
        </div>


    </div>
    <div class="hr">
        <hr id="hr">
    </div>
    @endforeach

@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
