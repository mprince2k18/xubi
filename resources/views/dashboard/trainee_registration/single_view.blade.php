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

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://xubisoft.com/xubisoft/assets/images/xubi/Xubisoft Logo.png" alt="{{ $single_trainee->name }}" class="img-fluid">
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
                                        {{-- <p>Register Time & Date</p> --}}
                                        {{-- <p>Register Time : {{ $single_trainee->created_at->format('d-M-Y') }}</p>
                                        <p>Created At : {{ $single_trainee->created_at->format('h:i:s a') }}</p> --}}
                                        {{-- <p>Touched : {{ $single_trainee->updated_at->format('h:i:s a') }}</p> --}}
                                        {{-- <p>Touched At: {{ isset($single_trainee->updated_at) ? $single_trainee->updated_at->format('h:i:s a') : "Not Yet Touched" }}</p>
                                        <p>Commented By: {{ ($single_trainee->commented_by) }}</p> --}}

                                        <p>Register Time : {{ $single_trainee->created_at->format('d-M-Y') }}</p>
                                        <p>Created At : {{ $single_trainee->created_at->format('h:i:s a') }} ( {{ $single_trainee->created_at->diffForHumans() }} )</p>
                                        {{-- <p>Touched : {{ $single_trainee->updated_at->format('h:i:s a') }}</p> --}}
                                        <p>Touched At: {{ isset($single_trainee->updated_at) ? $single_trainee->updated_at->format('h:i:s a') : "Not Yet Touched" }}</p>
                                        <p>Commented By: {{ ($single_trainee->commented_by) }}</p>


                                    </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- Extra large modal -->
                        <!-- Button trigger modal -->
                          <a href="" class="btn btn-primary">{{ $single_trainee->relationBetweenRemarks->remarks_status }}</a>
                          <a href="{{ url('/admin/trainee/pdf_view') }}/{{ $single_trainee->id }}" class="btn btn-success">PDF View</a>
                          <a href="{{ url('/admin/trainee/pdf_view') }}/{{ $single_trainee->id }}" class="btn btn-success">Send Mail</a>



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
                                <th scope="row">Fater Name</th>
                                <td>{{ $single_trainee->father_name }}</td>
                              </tr>


                              <tr>
                                <th scope="row">Father Occupation</th>
                                <td>{{ $single_trainee->relationBetweenFatherWorkingStatus->father_working_status }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Mother Name</th>
                                <td>{{ $single_trainee->mother_name }}</td>
                              </tr>


                              <tr>
                                <th scope="row">Mother Occupation</th>
                                <td>{{ $single_trainee->relationBetweenMotherWorkingStatus->mother_working_status }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Information Method</th>
                                <td>{{ $single_trainee->relationBetweenInformationSource->information_source }}</td>
                              </tr>

                              <tr>
                                <th scope="row">Rocket Number</th>
                                <td>{{ $single_trainee->rocket_number }}</td>
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

  </div>






  <div class="container emp-profile">


<h3 class="text-center bg-secondary text-light">
  <hr> UPDATE TRAINEE INFO <hr>
</h3>

                <div class="row">





                    <div class="col-md-8 offset-md-2">



                      <form action="{{ route('single_trainee_update') }}" method="post">
                        @csrf
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Field</th>
                                <th scope="col">Info</th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>

                                <td><input type="text" name="commented_by" class="form-control" value="{{ Auth::user()->name }}"></td>
                                <td><input type="hidden" name="id" class="form-control" value="{{ $single_trainee->id }}"></td>



                              </tr>

                              <tr>
                                <th scope="row">Applicant Name</th>

                                <td><input type="text" class="form-control" name="name" value="{{ $single_trainee->name }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Applicant Email</th>
                                <td><input type="text" class="form-control" name="email" value="{{ $single_trainee->email }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Contact No</th>
                                <td><input type="text" class="form-control" name="phone" value="{{ $single_trainee->phone }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Current Working Status</th>
                                <td>
                                  <select  class="form-control" name="working_status">
                                    <option value="{{ $single_trainee->working_status }}">{{ $single_trainee->relationBetweenWork->working_status }}</option>
                                    @foreach ($working_statuses as $working_status)
                                      <option value="{{ $working_status->id }}">{{ $working_status->working_status }}</option>
                                    @endforeach

                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">Academic Institution</th>
                                <td><input type="text" class="form-control" name="university" value="{{ $single_trainee->university }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Applicant NID</th>
                                <td><input type="text" class="form-control" name="nid" value="{{ $single_trainee->nid }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Gender</th>
                                <td>
                                  <select  class="form-control" name="gender">
              											<option value="{{ $single_trainee->gender }}">{{ $single_trainee->relationBetweenGender->gender }}</option>

              											@foreach ($gender_statuses as $gender_status)
              											<option value="{{ $gender_status->id }}">{{ $gender_status->gender }}</option>
              											@endforeach

              										</select>
                                </td>
                              </tr>




                              <tr>
                                <th scope="row">Father Name</th>
                                <td><input type="text" class="form-control" name="father_name" value="{{ $single_trainee->father_name }}"></td>
                              </tr>



                              <tr>
                                <th scope="row">Father Occupation</th>
                                <td>
                                  <select  class="form-control" name="father_occupation">
                                    <option value="{{ $single_trainee->father_occupation }}" class="bg-dark text-white">{{ $single_trainee->relationBetweenFatherWorkingStatus->father_working_status }}</option>

                                    @foreach ($father_working_statuses as $father_working_status)
                                    <option value="{{ $father_working_status->id }}">{{ $father_working_status->father_working_status }}</option>
                                    @endforeach

                                  </select>
                                </td>
                              </tr>




                              <tr>
                                <th scope="row">Mother Name</th>
                                <td><input type="text" class="form-control" name="mother_name" value="{{ $single_trainee->mother_name }}"></td>
                              </tr>



                              <tr>
                                <th scope="row">Mother Occupation</th>
                                <td>
                                  <select  class="form-control" name="mother_occupation">
                                    <option value="{{ $single_trainee->mother_occupation }}" class="bg-dark text-white">{{ $single_trainee->relationBetweenMotherWorkingStatus->mother_working_status }}</option>

                                    @foreach ($mother_working_statuses as $mother_working_status)
                                    <option value="{{ $mother_working_status->id }}">{{ $mother_working_status->mother_working_status }}</option>
                                    @endforeach

                                  </select>
                                </td>
                              </tr>




                              <tr>
                                <th scope="row">Alternative Phone No.</th>
                                <td><input type="text" class="form-control" name="alt_phone" value="{{ $single_trainee->alt_phone }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Siblings</th>
                                <td><input type="text" class="form-control" name="siblings" value="{{ $single_trainee->siblings }}"></td>
                              </tr>








                              <tr>
                                <th scope="row">Information Method</th>
                                <td>

                                  <select  class="form-control" name="information_source">
        														<option value="{{ $single_trainee->information_source }}">{{ $single_trainee->relationBetweenInformationSource->information_source }}</option>

        														@foreach ($information_sources as $information_source)
        															<option value="{{ $information_source->id }}">{{ $information_source->information_source }}</option>
        														@endforeach

        													</select>

                                </td>
                              </tr>

                              <tr>
                                <th scope="row">Rocket Number</th>
                                <td><input type="text" class="form-control" name="rocket_number" value="{{ $single_trainee->rocket_number }}"></td>
                              </tr>

                              <tr>
                                <th scope="row">Academic Qualification</th>
                                <td>

                                  <select class="form-control" name="educational_qualification">
                                    <option value="{{ $single_trainee->educational_qualification }}">{{ $single_trainee->relationBetweenEducationStatus->education_qualification }}</option>


                                    @foreach ($education_qualifications as $education_qualification)
                                    <option value="{{ $education_qualification->id }}">{{ $education_qualification->education_qualification }}</option>

                                    @endforeach



                                  </select>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">Have you done any SEIP training before?</th>
                                <td>

                                  <select  class="form-control" name="have_seip">
                                    <option value="{{ $single_trainee->have_seip }}" class="bg-dark text-white">{{ $single_trainee->relationBetweenSeipStatus->seip_status }}</option>


                                    @foreach($seip_statuses as $seip_status)
                                      <option value="{{ $seip_status->id }}">{{ $seip_status->seip_status }}</option>
                                    @endforeach

                                  </select>

                                </td>
                              </tr>

                              <tr>
                                <th scope="row">Remarks</th>
                                <td>

                                  <select  class="form-control" name="remarks">
                                    <option value="{{ $single_trainee->remarks }}" class="bg-dark text-white">{{ $single_trainee->relationBetweenRemarks->remarks_status }}</option>


                                    @foreach($remarks_statuses as $remarks_status)
                                      <option value="{{ $remarks_status->id }}">{{ $remarks_status->remarks_status }}</option>
                                    @endforeach

                                  </select>

                                </td>
                              </tr>


                            </tbody>
                          </table>

                          <button type="submit" class="btn btn-primary">Send Data</button>

                      </form>



                    </div>
                </div>

  </div>







@endsection

@section('js')

@endsection
