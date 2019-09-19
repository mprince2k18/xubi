@extends('dashboard.app')

@section('title')
  Edit Portfolio
@endsection



@section('content')

  <div class="container">

  <div class="row row-deck">
    <div class="col-lg-6 offset-md-3">
      <form action="{{ route('update') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Edit Portfolio</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label"> Portfolio Name</label>
            <input type="hidden" class="form-control" name="portfolio_id" placeholder="Portfolio Name" value="{{ $single_portfolio_edit->id }}">
            <input class="form-control" name="portfolio_name" placeholder="Portfolio Name" value="{{ $single_portfolio_edit->portfolio_name }}">

             <div class="form-group">
               <label class="form-label"> Portfolio Category</label>
               <select name="portfolio_category_id" id="select-countries" class="form-control custom-select">
                 <option value="{{ $single_portfolio_edit->id }}" class="bg-dark text-light">{{ $single_portfolio_edit->relationBetweenCategory->service_category_name }}</option>

                 @foreach ($categories as $categorie)
                  <option value="{{ $categorie->id }}">{{ $categorie->service_category_name }}</option>
                 @endforeach

               </select>
             </div>


             <div class="form-group">
               <label class="form-label">Active Photo</label>
                <img src="{{ asset('uploads/portfolio') }}/{{ $single_portfolio_edit->portfolio_image }}" alt="{{ $single_portfolio_edit->portfolio_image }}" class="img-fluid">
             </div>

             <!-- file uploads -->
               <div class="dropify-wrapper" style="height: 192px;">

                 <label class="form-label">Portfolio Photo</label>

                 <div class="dropify-loader" style="display: none;"></div>
                 <div class="dropify-errors-container"><ul></ul></div>

                 <input type="file" class="dropify" data-height="180" name="portfolio_image" value="{{ $single_portfolio_edit->portfolio_image }}">

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

</div>





</div>
</div>
@endsection
