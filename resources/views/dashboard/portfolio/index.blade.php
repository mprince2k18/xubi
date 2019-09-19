@extends('dashboard.app')

@section('title')
  Portfolio
@endsection



@section('content')

  <div class="container">



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




  <div class="row row-deck">
    <div class="col-lg-6">
      <form action="{{ route('create') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Add Portfolio</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label"> Portfolio Name</label>
            <input class="form-control" name="portfolio_name" placeholder="Portfolio Name">

             <div class="form-group">
               <label class="form-label"> Portfolio Category</label>
               <select name="portfolio_category_id" id="select-countries" class="form-control custom-select">
                 @foreach ($categories as $categorie)
                  <option value="{{ $categorie->id }}">{{ $categorie->service_category_name }}</option>
                 @endforeach

               </select>
             </div>

             <!-- file uploads -->
               <div class="dropify-wrapper" style="height: 192px;">

                 <label class="form-label">Portfolio Photo</label>

                 <div class="dropify-loader" style="display: none;"></div>
                 <div class="dropify-errors-container"><ul></ul></div>

                 <input type="file" class="dropify" data-height="180" name="portfolio_image">

                 <button type="button" class="dropify-clear">Remove</button>


               </div>
               <!-- file uploads end -->

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

<!--    All Info-->
<div class="col-lg-6 col-sm-12">

  <div class="card">
            <div class="card-header">
              <h3 class="card-title">Team Members</h3>
            </div>
            <div class="table-responsive">
              <table class="table card-table table-vcenter text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @forelse ($portfolios as $portfolio)
                  <tr>
                    <th scope="row">{{ $portfolio->id }}</th>
                    <td>{{ $portfolio->portfolio_name }}</td>
                    <td>{{ $portfolio->relationBetweenCategory->service_category_name }}</td>
                    <td>
                      <img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->portfolio_image }}" alt="{{ $portfolio->portfolio_name }}" width="80px">
                    </td>
                    <td>{{ $portfolio->created_at->diffForHumans() }}</td>
                    <td>
                      <a href="{{ url('/admin/portfolio/edit') }}/{{ $portfolio->id }}" class="btn-sm btn-primary">edit</a>
                    </td>
                  </tr>

                  @empty

                  <td>No Portfolio Here</td>

                  @endforelse

                </tbody>
              </table>


              {{ $portfolios->links() }}


            </div>
            <!-- table-responsive -->
          </div>



</div>

<!-- trashed -->


</div>

@endsection
