@extends('dashboard.app')

@section('title')
  Edit Service
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
    <div class="col-lg-6 offset-md-2">
      <form action="{{ route('update_service') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label class="form-label">Service name</label>
            <input type="hidden" name="service_id" value="{{ $single_service_edit->id }}">

            <input type="text" class="form-control" name="service_name" placeholder="Service name"  value="{{ $single_service_edit->service_name }}">
          </div>


                              <div class="form-group">
                                <label class="form-label">Service Category</label>
                                <select name="service_category_id" id="select-countries" class="form-control custom-select">
                                  <option value="{{ $single_service_edit->id }}">{{ $single_service_edit->relationBetweenCategory->service_category_name }}</option>

                                  @foreach ($service_categories as $service_category)
                                    <option value="{{ $service_category->id }}">{{ $service_category->service_category_name }}</option>
                                  @endforeach
                                </select>
                              </div>


          <div class="form-group">
            <label class="form-label">Service Photo</label>
            <input type="file" class="form-control" name="service_photo" value="{{ $single_service_edit->service_photo }}">
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

    <!-- Add Services End-->




@endsection
