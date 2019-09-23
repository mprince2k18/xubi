@extends('dashboard.app')

@section('title')
  Header
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

      <form action="{{ route('add_header_slider') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Header Slider Headline</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label">Headline

             </label>
            <textarea class="form-control" id="summernote" name="header_headline" rows="7" placeholder="text here.."></textarea>

                  @error('header_headline')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

            <label class="form-label">Message

             </label>
            <textarea class="form-control" name="header_message" rows="7" placeholder="text here.."></textarea>

            @error('header_message')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <div class="form-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="header_banner">
								<label class="custom-file-label">Choose file</label>

                @error('header_banner')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


							</div>
						</div>

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
    <div class="col-lg-6">
      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Banners</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                      <tr>
                        <th>ID</th>
                        <th>Headline</th>
                        <th>Message</th>
                        <th>Banner</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($banners as $banner)
                        <tr>
                          <th scope="row"> {{ $banner->id }} </th>
                          <td> {{  Str::limit($banner->header_headline,5)  }}</td>
                          <td> {{ Str::limit($banner->header_message,5) }}</td>
                          <td>  <img src="{{ asset('uploads/banner') }}/{{ $banner->header_banner }}" alt="{{ $banner->header_banner }}" width="80px"> </td>
                          <td> {{ $banner->created_at->diffForHumans() }}</td>
                        <td>



                            <div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">
                            <a href="{{ url('/admin/edit/slider') }}/{{ $banner->id }}" class="text-light">
                              Edit
                            </a>
                            </button>
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(65px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">


														<li><a href="{{ url('/admin/header/slider') }}/{{ $banner->id }}">Trash</a></li>

													</ul>
												</div>

                          </td>
                        </tr>
                      @empty
                        No Banner
                      @endforelse


                    </tbody>
                  </table>

                  {{ $banners->links() }}
                </div>
    </div>
  </div>
</div>


{{-- Trashed row --}}



<div class="container">






<div class="row row-deck">
  <div class="col-lg-12">



    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Trashed Banners</h3>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                  <thead >
                    <tr>
                      <th>ID</th>
                      <th>Headline</th>
                      <th>Message</th>
                      <th>Banner</th>
                      <th>Deleted At</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    @forelse ($trashed_banners as $trashed_banner)
                      <tr>
                        <th scope="row"> {{ $trashed_banner->id }} </th>
                        <td> {{  Str::limit($trashed_banner->header_headline,5)  }} </td>
                        <td> {{ Str::limit($trashed_banner->header_message,5) }} </td>

                        <td>
                          <img src="{{ asset('uploads/banner') }}/{{ $banner->header_banner }}" alt="{{ $banner->header_banner }}" width="80px">
                        </td>
                        <td> {{ $trashed_banner->deleted_at->diffForHumans() }} </td>
                        <td>

                          <div class="btn-group mt-2 mb-2">

                          <a href="{{ url('/restore/slider') }}/{{ $trashed_banner->id }}" class="btn btn-primary">
                            Restore
                          </a>



                      </div>

                        </td>
                      </tr>
                    @empty
                      No Banner
                    @endforelse


                  </tbody>
                </table>

                {{ $trashed_banners->links() }}
              </div>
    </div>
  </div>
  </div>
  </div>




</div>
</div>
@endsection
