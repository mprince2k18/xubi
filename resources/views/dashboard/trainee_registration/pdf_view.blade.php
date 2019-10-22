<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>

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

  .pdf_watermark{
    background-image: url(https://res.cloudinary.com/dvd2tat8q/image/upload/v1571742480/img/Xubisoft_Logo_l1ikli.png);
    background-size: contain;
    background-repeat: no-repeat;
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

  <body>
    <div class="container emp-profile">
    <div class="pdf_watermark">


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
                                        <p>Register Time : {{ $single_trainee->created_at->format('d-M-Y') }}</p>
                                        <p>Created At : {{ $single_trainee->created_at->format('h:i:s a') }}</p>
                                        <p>Touched : {{ $single_trainee->updated_at->format('h:i:s a') }}</p>

                                      </div>
                          </div>
                      </div>
                      <div class="col-md-2">
                          <!-- Extra large modal -->
                          <!-- Button trigger modal -->
                            <a href="" class="btn btn-primary">{{ $single_trainee->relationBetweenRemarks->remarks_status }}</a>




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
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
