@extends('dashboard.app')

@section('title')
  Products
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
      <form action="{{ route('add_product') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
          <div class="form-group">
            <label class="form-label">Product name</label>
            <input type="text" class="form-control" name="product_name" placeholder="Service name">
          </div>







          <div class="form-group">
            <label class="form-label">Product Photo</label>
            <input type="file" class="form-control" name="product_photo">
          </div>

          <div class="form-group">
            <label class="form-label">Slug Name</label>
            <input type="text" class="form-control" name="slug_name" placeholder="Slug Name">
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
      <div class="card">

                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead >
                        <tr>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Photo</th>
                          <th>Slug</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach ($all_products as $all_product)
                      <tr>
                        <td scope="row">{{ $all_product->id }}</td>
                        <td>{{ $all_product->product_name }}</td>

                        <td>
                          <img src="{{ asset('uploads/product') }}/{{ $all_product->product_photo }}" alt="{{ $all_product->product_photo }}" width="80px">
                        </td>

                        <td>{{ $all_product->slug_name }}</td>



                          <td>
                            <a href="{{ url('/admin/edit/product') }}/{{ $all_product->id }}" class="btn btn-primary btn-sm mb-1">Edit</a>
                          </td>

                      </tr>
                      @endforeach



                      </tbody>
                    </table>
                  </div>
    </div>
    </div>
  </div>

</div>

<!-- Add Services category End-->





@endsection
