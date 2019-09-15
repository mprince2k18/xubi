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


      <!-- Add Services Category-->

      <div class="col-lg-6">
        <form action="{{ route('update_category') }}"  method="post" class="card" enctype="multipart/form-data">
  @csrf
          <div class="card-body">
            <div class="form-group">
              <label class="form-label">Service Category Name</label>
              <input type="hidden" name="category_id" value="{{ $single_category_edit->id }}">
              <input type="text" value="{{$single_category_edit->service_category_name}}" class="form-control" name="service_category_name" placeholder="Service Category Name">
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


    </div>
    </div>
    </div>

    <!-- Add Services End-->




@endsection
