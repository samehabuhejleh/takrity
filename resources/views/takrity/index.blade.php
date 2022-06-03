@extends('layout.layouts')

@section('contant')
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="{{URL::asset('images/technician-checking-power-lines-heat-exchanger-with-current-clamps_179755-11249.png')}}" id="img_sli">
         <div class="container">
            <div class="text">
                <h1 id="text">TAKRITI</h1>
                <p id="tit_p">We are handy working with absolutely any electrical power supply system, including the alternate energy too!</p>
               <a href="{{route('about_us')}}" id="a_aboutus"> <input type="submit" value="READ MORE ABOUT US" id="read_more"></a>
               </div>
         </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="{{URL::asset('images/technician-checking-power-lines-heat-exchanger-with-current-clamps_179755-11249.png')}}" id="img_sli" >
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="{{URL::asset('images/technician-checking-power-lines-heat-exchanger-with-current-clamps_179755-11249.png')}}" id="img_sli" >
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
  <div class="container">
      <h1 id="product">product</h1>
      <div class="row product">
        @foreach ( $products as $item )
         <div class="col-md-4">
           <a href="{{route('products.1',$item->id)}}" id="a_pro"> <img src="{{URL::asset($item->image)}}" alt="" id="img-pp" ></a>
           <a href="{{route('products.1',$item->id)}}" id="a_pro"> <h1 id="tit_product">{{$item->title}}</h1></a>
            <a href="{{route('products.1',$item->id)}}" id="a_pro"> <p id="p_product">{{$item->description}} </p></a>
         </div>
         @endforeach
      </div>
  </div>

  <div class="view_all">
     <a href="{{route('product')}}"> <input type="submit" value="View All" id="view_all_product"></a>
  </div>

<div class="container_fluid con_f">
  <div class="container ">
     <div class="row portfolio">
         @foreach ($portfolios as $item )
         <div class="col-md-6">
            <img src="{{URL::asset($item->image)}}"  id="img_portfolio">
       </div>

           <div class="col-md-6">
               <h1 id="tit_portfolio">{{$item->title}}</h1>
               <p id="p_portfolio">{{$item->description}}</p>
               <a href="{{route('portfolio')}}" id="a_portfolio"><input type="submit" value="View All" id="view_all_portfolio"></a>
           </div>
         @endforeach

        </div>
    </div>
</div>


  <div class="container">
     <h1 id="recent_news">Recent News</h1>
    </div>


     <div class="container">
      <div class="row">
        @foreach ($news as $item )
          <div class="col-md-3">
            <div class="card">
              <a href="{{route('news_details',$item->id)}}" id="aa_ne">  <img src="{{URL::asset($item->image)}}"  id="imgnews"></a>
              <a href="{{route('news_details',$item->id)}}" id="aa_ne">  <h1 id="tit_news">{{$item->title}}</h1></a>
              <a href="{{route('news_details',$item->id)}}" id="aa_ne">  <h3 id="d_news">{{$item->date}}</h3></a>
              <a href="{{route('news_details',$item->id)}}" id="aa_ne"> <p id="p_news">{{$item->description}}</p></a>
              </div>
          </div>
          @endforeach
      </div>

     </div>


    <div class="view_all_news">
       <a href="{{route('new')}}"> <input type="submit" value="View All" id="view_all_news"></a>
    </div>

@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

