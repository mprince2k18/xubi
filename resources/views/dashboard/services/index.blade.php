@extends('dashboard.app')

@section('title')
  Services
@endsection



@section('content')

<!-- SESSION -->

    @if (session('success'))
   <div class="alert alert-success">
       {{ session('success') }}
   </div>
   @endif

    @if (session('restore'))
   <div class="alert alert-success">
       {{ session('restore') }}
   </div>
   @endif

    @if (session('delete'))
   <div class="alert alert-success">
       {{ session('delete') }}
   </div>
   @endif

   @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div><br />
   @endif

<!-- SESSION END-->

<!-- Add Services -->
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <form action="{{ route('add_service') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label class="form-label">Service name</label>
            <input type="text" class="form-control" name="service_name" placeholder="Service name">
          </div>


                              <div class="form-group">
                                <label class="form-label">Service Category</label>
                                <select name="service_category_id" id="select-countries" class="form-control custom-select">
                                  @foreach ($service_categories as $service_category)
                                    <option value="{{ $service_category->id }}">{{ $service_category->service_category_name }}</option>
                                  @endforeach
                                </select>
                              </div>


          <div class="form-group">
            <label class="form-label">Service Photo</label>
            <input type="file" class="form-control" name="service_photo">
          </div>

        </div>
        <div class="card-footer text-right">
          <div class="d-flex">
            <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
            <button type="submit" class="btn btn-primary ml-auto">Send data</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Add Services End-->

    <!-- Add Services Category-->

    <div class="col-lg-6">
      <form action="{{ route('add_service_category') }}"  method="post" class="card" enctype="multipart/form-data">
@csrf
        <div class="card-body">
          <div class="form-group">
            <label class="form-label">Service Category Name</label>
            <input type="text" class="form-control" name="service_category_name" placeholder="Service Category Name">
          </div>
        </div>

        <div class="card-footer text-right">
          <div class="d-flex">
            <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
            <button type="submit" class="btn btn-primary ml-auto">Send data</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>

<!-- Add Services category End-->


<!-- view services -->
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">

									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead >
												<tr>
													<th>ID</th>
													<th>Service Name</th>
													<th>Category</th>
													<th>Photo</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
                        @foreach ($company_services as $company_service)
                        <tr>
                          <th scope="row">{{$company_service->id}}</th>
                          <th>{{$company_service->service_name}}</th>
                          <td>{{$company_service->relationBetweenCategory->service_category_name}}</td>
                          <td>{{$company_service->service_photo}}</td>
                          <td>
                            <img src="{{ asset('uploads/service') }}/{{ $company_service->service_photo }}" alt="{{ $company_service->service_photo }}" width="80px">
                          </td>


                            <td>
                              <a href="{{ url('/admin/edit/service') }}/{{ $company_service->id }}" class="btn btn-primary btn-sm mb-1">Edit</a>
                            </td>

                        </tr>
                        @endforeach

											</tbody>
										</table>
									</div>
    </div>
    </div>

    <!-- Add Services End-->

    <!-- Add Services Category-->

    <div class="col-lg-6">
      <div class="card">

									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead >
												<tr>
													<th>ID</th>
													<th>Service Category</th>
													<th>Action</th>

												</tr>
											</thead>
											<tbody>
                        @foreach($service_categories as $service_category)
                        <tr>
                          <th scope="row">{{ $service_category->id}}</th>
                          <td> {{ $service_category-> service_category_name }} </td>
                          <td>
                            <a href="#" class="btn btn-primary btn-sm mb-1">Edit</a>
                          </td>
                        </tr>
                        @endforeach


											</tbody>
										</table>
									</div>
    </div>
  </div>



</div>
<!-- view services End -->



@endsection
