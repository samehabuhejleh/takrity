<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




     <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout_h_f.css')}}">
    <link rel="stylesheet" href="{{asset('css/about_us.css')}}">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
    <link rel="stylesheet" href="{{asset('css/products_1.css')}}">
    <link rel="stylesheet" href="{{asset('css/products_2.css')}}">
    <link rel="stylesheet" href="{{asset('css/products_3.css')}}">
    <link rel="stylesheet" href="{{asset('css/news.css')}}">
    <link rel="stylesheet" href="{{asset('css/news_details.css')}}">
    <link rel="stylesheet" href="{{asset('css/careers.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact_us.css')}}">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-default" >

                <div class="container">

                    <div class="navbar-header"  >
                        <img src="{{URL::asset('images/Takriti_Logo w.png')}}" id="logo" >

                        <button type="button" class="navbar-toggle"
                                data-toggle="collapse" data-target="#mymenu"  >
                            <span class="icon-bar" ></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                 </div>
                    <div class="collapse navbar-collapse" id="mymenu" >
                        <ul class="nav navbar-nav navbar-left" >
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a  href="{{route('about_us')}}">About Us</a></li>
                            <li><a href="{{route('product')}}"> Products</a></li>
                            <li><a href="{{route('portfolio')}}"> Portfolio</a></li>
                            <li><a  href="{{route('new')}}">News</a></li>
                            <li><a href="{{route('careers')}}">Careers</a></li>
                            <li><a href="{{route('contact_us')}}">Contact Us</a></li>




                            <div class="navbar-right" >
                         <img id="search" src="{{URL::asset('images/search.png')}}" >

                         <a href="#"> <img src="{{URL::asset('images/global (3).png')}}"></a>



                            </div>

                        </ul>
                    </div>
                </div>
                </nav>

                @yield('contant')



                         <div class="container containerfoo">
                            <hr id="hr">
                                <div class="row r1">
                                       <div class="col-md-4" >
                                           <h2  >Follow Us</h3><br>
                                           <div class="row">
                                               <div class="col-md-2">
                                                <a href="https://twitter.com/twitter"target="_blank" > <img src="{{URL::asset('images/icn-twitter.png')}}" ></a>
                                               </div>
                                               <div class="col-md-2">
                                                <a href="https://jo.linkedin.com/"target="_blank" ><img src="{{URL::asset('images/icn-linkedin.png')}}" ></a>
                                               </div>
                                               <div class="col-md-2">
                                                <a href="https://www.instagram.com/"target="_blank" > <img src="{{URL::asset('images/icn-instagram.png')}}" ></a>
                                               </div>
                                               <div class="col-md-2">
                                                <a href="https://www.facebook.com/"target="_blank" ><img src="{{URL::asset('images/icn-facebook.png')}}" ></a>
                                               </div>
                                           </div>

                                       </div>
                                       <div class="col-md-4">
                                         <h2 id="get">Get in tuch</h3>
                                          <img class="col-md-2"src="{{URL::asset('images/call.png')}}" >
                                          <h4  >00962 6 4614025 4648837 </h4>
                                          <h4 id="phone2">00962 6 4614025 4648837</h4>

                                          <img class="col-md-2" src="{{URL::asset('images/email.png')}}" >
                                           <a href="">
                                           <h4 id="email">info@takritigroup.com</h4></a>
                                       </div>
                                       <div class="col-md-4">
                                          <h2  id="Menue">Menue</h3>
                                          <ul class="main" >
                                              <div class="row list">
                                                  <div class="col-md-6 list1">
                                                     <a href="{{route('index')}}"> <li>home</li></a>
                                                     <a href="{{route('about_us')}}"> <li>about us</li></a>
                                                     <a href="{{route('portfolio')}}"> <li>portflio</li></a>
                                                  </div>
                                                  <div class="col-md-6 list2">
                                                   <a href="{{route('new')}}"> <li>news</li></a>
                                                   <a href="{{route('careers')}}"><li>careers </li></a>
                                                   <a href="{{route('contact_us')}}"><li>contuct us</li></a>
                                                  </div>
                                              </div>
                                          </ul>
                                       </div>

                                   </div><br>
                                   </div>


                                    <div class="footer">

                                       <h3 id="footer">Jordancode&copy;2021</h3>

                                   </div>



                                   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                   <script>
                                    let slideIndex = 1;
                                    showSlides(slideIndex);

                                    function plusSlides(n) {
                                      showSlides(slideIndex += n);
                                    }

                                    function currentSlide(n) {
                                      showSlides(slideIndex = n);
                                    }

                                    function showSlides(n) {
                                      let i;
                                      let slides = document.getElementsByClassName("mySlides");
                                      let dots = document.getElementsByClassName("dot");
                                      if (n > slides.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = slides.length}
                                      for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                      }
                                      slides[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " active";
                                    }
                                    </script>


 
</body>
</html>
