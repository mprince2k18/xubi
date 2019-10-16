@extends('dashboard.trainee_registration.app')

@section('title')
  {{ $single_trainee->name }}
@endsection

@section('css')

<style media="screen">

.counter_nav{
  display: none;
}

.emp-profile{
  padding: 3%;
  margin-top: 3%;
  margin-bottom: 3%;
  border-radius: 0.5rem;
  background: #fff;
}
.profile-img{
  text-align: center;
}
.profile-img img{
  width: 70%;
  height: 100%;
}
.profile-img .file {
  position: relative;
  overflow: hidden;
  margin-top: -20%;
  width: 70%;
  border: none;
  border-radius: 0;
  font-size: 15px;
  background: #212529b8;
}
.profile-img .file input {
  position: absolute;
  opacity: 0;
  right: 0;
  top: 0;
}
.profile-head span{
  color: #000;
  font-weight: bold;
}
.profile-head h5{
  color: #333;
}
.profile-head h6{
  color: #0062cc;
}
.profile-edit-btn{
  border: none;
  border-radius: 1.5rem;
  width: 70%;
  padding: 2%;
  font-weight: 600;
  color: #6c757d;
  cursor: pointer;
}
.proile-rating{
  font-size: 12px;
  color: #818182;
  margin-top: 5%;
}
.proile-rating span{
  color: #495057;
  font-size: 15px;
  font-weight: 600;
}
.profile-head .nav-tabs{
  margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
  font-weight:600;
  border: none;
}
.profile-head .nav-tabs .nav-link.active{
  border: none;
  border-bottom:2px solid #0062cc;
}
.profile-work{
  padding: 14%;
  margin-top: -15%;
}
.profile-work p{
  font-size: 12px;
  color: #818182;
  font-weight: 600;
  margin-top: 10%;
}
.profile-work a{
  text-decoration: none;
  color: #495057;
  font-weight: 600;
  font-size: 14px;
}
.profile-work ul{
  list-style: none;
}
.profile-tab label{
  font-weight: 600;
  color: #000;
}
.profile-tab p{
  font-weight: 600;
  color: #0062cc;
}
</style>


@endsection

@section('content')

  <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://gmpfinancial.com.au/wp-content/uploads/2014/12/pp-size-crop-3287.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h2>
                                        {{ $single_trainee->name }}
                                    </h2>
                                    <h6>
                                        {{ $single_trainee->relationBetweenRemarks->remarks_status }} Trainee
                                    </h6>
                                    <h3>Quarter : <span>{{ $single_trainee->quarter_id }}</span></h3>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Application Info</p>
                            <a href="">{{ $single_trainee->created_at->format('d-M-Y') }}</a><br/>
                            <a href="">{{ $single_trainee->created_at->format('h-s') }}</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Applicants Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->trainee_id }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->name }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->phone }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Applicants Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->relationBetweenWork->working_status }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Applicants Institution</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->university }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Applicants NID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->nid }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->relationBetweenGender->gender }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Information Source</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->relationBetweenInformationSource->information_source }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Rocket Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->rocket_number }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Educational Qualification</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->relationBetweenEducationStatus->education_qualification }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Have Seip?</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $single_trainee->relationBetweenSeipStatus->seip_status }}</p>
                                            </div>
                                        </div>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>




@endsection

@section('js')

@endsection
