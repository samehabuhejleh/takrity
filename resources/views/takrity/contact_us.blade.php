@extends('layout.layouts')

@section('contant')
<div class="img_contact">
    <img src="{{URL::asset('images/contact_us.png')}}" id="img_contact">
</div>

<div class="container">
    <h1 id="contact">Contact US</h1>
</div>

<div class="container container_form_contact">
    <h1 id="contact_us">Send Us Message</h1>

    <div class="PersonalInfocolorcontact">
        <div class="row">
            <div class="col-md-12">
               <h1 id="PersonalInfocontact">Personal Info</h1>
            </div>
        </div>
    </div>


    <div class="Personal_Info_contact_form">
        <form action="{{route('contact.send.mail')}}" method="post" >
            @csrf
            <div class="row fullname">
                <div class="col-md-3">
                    <h2 id="font1">Full Name : </h2>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="text_full" name="fullname">
                </div>
            </div>

            <div class="row Email">
                <div class="col-md-3">
                    <h2 id="font1">Email : </h2>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="text_Email" name="Email">
                </div>
            </div>

            <div class="row Company">
                <div class="col-md-3">
                    <h2 id="font1">Company : </h2>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="text_Company" name="Company">
                </div>
            </div>

            <div class="row Subject">
                <div class="col-md-3">
                    <h2 id="font1">Subject : </h2>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="text_Subject" name="Subject">
                </div>
            </div>

            <div class="row YourMessage">
                <div class="col-md-3">
                    <h2 id="font1">YourMessage : </h2>
                </div>
                <div class="col-md-9">
                    <textarea name="YourMessage" id="YourMessage" cols="110" rows="7" class="form-control"></textarea>
                </div>
            </div>
    </div>

    <div class="row submit_contact">
        <div class="col-md-12">
            <input type="submit" value="Submit" id="submit_contact_form">
        </div>
    </div>
</form>
</div>


<div id="googleMap">

</div>

<div class="container">
    <div class="contact_us">
        <div class="row contact_us">
            @foreach ($contact_us as $item )

            <div class="col-md-3">
                <img src="{{URL::asset($item->image)}}">
                <h3>{{$item->title}}</h3>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmybNOwxsI386vWEYprqWR16RFMKSd8Zc&callback=initMap">
    </script>
<script>
    @foreach ( $contact_map as $item)
    var myCenter = new google.maps.LatLng({{$item->atit}}, {{$item->lang}});
    @endforeach
    var marker;
    function initialize() {
        var mapProp = {
            scrollwheel: false,
            center: myCenter,
            zoom: 15,

            mapTypeId: google.maps.MapTypeId.ROADMAP

        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>
