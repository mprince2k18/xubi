@extends('dashboard.trainee_registration.app')

@section('title')
  {{ $single_trainee->name }}
@endsection

@section('css')

<style media="screen">

.user_modal{
  max-width: 80% !important;
}

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

                                    <div class="text-left">
                                        <p>Register Time & Date</p>
                                        <p>{{ $single_trainee->created_at->format('d-M-Y') }}</p>
                                        <p>{{ $single_trainee->created_at->format('h:i:s a') }}</p>

                                    </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- Extra large modal -->
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">EDIT PROFILE</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog user_modal" role="document">
  <div class="modal-content">
      <div class="trainee_name text-center">
        <h4>{{ $single_trainee->name }}</h4>
        <hr>
      </div>
    <div class="modal-body">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-4">

            {{-- ------------------------------------- --}}
            <div class="container">

              	<div class="row">
                  <!-- edit form column -->
                    <div class="col-md-10 personal-info">



                      <form class="form-horizontal" role="form" action="">

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Applicant's ID</label>
                          <div class="col-lg-8">
                            <input class="form-control" type="hidden" value="{{ $single_trainee->id }}">
                            <p>{{ $single_trainee->trainee_id }}</p>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-lg-3 control-label">Phone</label>
                          <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{ $single_trainee->phone }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Applicants nid</label>
                          <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{ $single_trainee->nid }}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">rocket_number</label>
                          <div class="col-lg-8">
                            <input class="form-control" type="text" value="{{ $single_trainee->rocket_number }}">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-3 control-label"></label>
                          <div class="col-md-8">
                            <input type="button" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="button" class="btn btn-dark" data-dismiss="modal" value="Cancel">
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
              <hr>
            {{-- ------------------------------------- --}}

          </div>

        </div>

      </div>

    </div>
    {{-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> --}}
  </div>
</div>
</div>

  {{-- -------------------------- --}}
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-8 offset-md-4">

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Field</th>
                                <th scope="col">Info</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Applicant ID</th>
                                <td>{{ $single_trainee->trainee_id }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Applicant Name</th>
                                <td>{{ $single_trainee->name }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Applicant Email</th>
                                <td>{{ $single_trainee->email }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Contact No</th>
                                <td>{{ $single_trainee->phone }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Current Working Status</th>
                                <td>{{ $single_trainee->relationBetweenWork->working_status }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Academic Institution</th>
                                <td>{{ $single_trainee->university }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Applicant NID</th>
                                <td>{{ $single_trainee->nid }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Gender</th>
                                <td>{{ $single_trainee->relationBetweenGender->gender }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Information Method</th>
                                <td>{{ $single_trainee->relationBetweenInformationSource->information_source }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Rocket Number</th>
                                <td>{{ $single_trainee->rocket }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Academic Qualification</th>
                                <td>{{ $single_trainee->relationBetweenEducationStatus->education_qualification }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Have you done any SEIP training before?</th>
                                <td>{{ $single_trainee->relationBetweenSeipStatus->seip_status }}</td>
                              </tr>


                            </tbody>
                          </table>


                    </div>
                </div>
            </form>
        </div>




@endsection

@section('js')

@endsection
