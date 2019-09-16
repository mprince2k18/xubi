@extends('dashboard.app')

@section('title')
  Edit Products
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
      <form action="{{ route('update_product') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label class="form-label">Product name</label>
            <input type="hidden" name="product_id" value="{{ $single_product_edit->id }}">

            <input type="text" class="form-control" name="product_name" placeholder="Service name"  value="{{ $single_product_edit->product_name }}">
          </div>




          <div class="form-group">
            <label class="form-label">Product Photo</label>
            <input type="file" class="form-control" name="product_photo" value="{{ $single_product_edit->product_photo }}">
          </div>


          <div class="form-group">
            <label class="form-label">Slug Name</label>
            <input type="text" class="form-control" name="slug_name" value="{{ $single_product_edit->slug_name }}">
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
