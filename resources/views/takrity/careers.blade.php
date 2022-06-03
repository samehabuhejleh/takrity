@extends('layout.layouts')

@section('contant')
<div class="img_careers">
    <img src="{{URL::asset('images/electrician_23.png')}}" id="img_careers">
</div>
<div class="container">
    <h1 id="careers">careers</h1>
</div>
<div class="container container_form">
    <h2 id="p_careers">Please submit your information and qualifications and it will be studied by our H.R team and they will contact you soon...</h2>
  <div class="PersonalInfocolor">
    <div class="row">
        <div class="col-md-12">
           <h1 id="PersonalInfo">Personal Info</h1>
        </div>
    </div>
</div>
    <div class="Personal_Info_form">
    <form action="{{route('career.send.mail')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="row fullname">
            <div class="col-md-3">
                <h2 id="font">Full Name : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_full" name="fullname">
            </div>
        </div>

        <div class="row birthPlace">
            <div class="col-md-3">
                <h2 id="font">Birth Place : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_birth" name="BirthPlace">
            </div>
        </div>

        <div class="row dateOfBirth">
            <div class="col-md-3">
                <h2 id="font">Date Of Birth : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_dateOfBirth" name="date_birth">
            </div>
        </div>

        <div class="row Nationality">
            <div class="col-md-3">
                <h2 id="font">Nationality : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_Nationality" name="Nationality">
            </div>
        </div>

        <div class="row Gender">
            <div class="col-md-3">
                <h2 id="font">Gender : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_Gender" name="Gender">
            </div>
        </div>

        <div class="row EmailAddress">
            <div class="col-md-3">
                <h2 id="font">Email Address : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_EmailAddress" name="EmailAddress">
            </div>
        </div>

        <div class="row MobileNo">
            <div class="col-md-3">
                <h2 id="font">Mobile No. : </h2>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="text_MobileNo" name="MobileNo">
            </div>
        </div>
    </div>

   <div class="Preferencescolor">
    <div class="row">
        <div class="col-md-12">
           <h1 id="Preferences">Preferences</h1>
        </div>
    </div>
</div>

<div class="Preferences_form">
    <div class="row Experinces">
        <div class="col-md-3">
            <h2 id="font">Experinces : </h2>
        </div>
        <div class="col-md-9">
           <textarea name="Experinces" id="Experinces" cols="110" rows="7" class="form-control"></textarea>
        </div>
    </div>

    <div class="row Languages">
        <div class="col-md-3">
            <h2 id="font">Languages : </h2>
        </div>
        <div class="col-md-9">
            <input type="text" class="form-control" id="text_Languages" name="Languages">
        </div>
    </div>
</div>

<div class="Commentscolor">
<div class="row">
    <div class="col-md-12">
       <h1 id="Comments">Comments</h1>
    </div>
</div>
</div>

<div class="Comments_form">
<div class="row Messages">
    <div class="col-md-3">
        <h2 id="font">Messages : </h2>
    </div>
    <div class="col-md-9">
       <textarea name="Messages" id="Messages" cols="110" rows="7" class="form-control"></textarea>
    </div>
</div>

<div class="row UploadCV">
    <div class="col-md-3">
        <h2 id="font">Upload CV : </h2>
    </div>
    <div class="col-md-9">
        <input type="file" name="cv" id="cv" >
            </div>
          </div>
        </div>

      <div class="row submit">
          <div class="col-md-12">
              <input type="submit" value="Submit" id="submit_form">
          </div>
      </div>



    </form>
</div>
@endsection
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
