@extends('dashboard.app')

@section('title')
  Info
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
      <form action="{{ route('add_info') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Add Info</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label"> Info Headline
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" name="Info_headline" rows="7" placeholder="text here.."></textarea>

            <label class="form-label"> Info Message
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" name="Info_message" rows="7" placeholder="text here.."></textarea>

            <div class="form-group">
                <label class="form-label"> Info Image </label>
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="Info_banner">
					<label class="custom-file-label">Choose file</label>
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

<!--    All Info-->

    <div class="col-lg-6">
      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Infos</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead >
                      <tr>
                        <th>ID</th>
                        <th>Headline</th>
                        <th>Message</th>
                        <th>Banner</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($infos as $info)
                        <tr>
                          <th scope="row"> {{ $info->id }} </th>
                          <td> {{ Str::limit($info->Info_headline, 10) }} </td>
                          <td> {{ Str::limit($info->Info_message, 9) }} </td>
                          <td> <img src="{{ asset('uploads/info') }}/{{ $info->Info_banner }}" alt="{{ $info->Info_banner }}" width="80px"> </td>
                          <td> {{ $info->created_at->diffForHumans() }} </td>
                          <td>


                            <div class="btn-group mt-2 mb-2">
													<button type="button" class="btn btn-primary">
                            <a href="{{ url('/admin/edit/info') }}/{{ $info->id }}" class="text-light">
                              Edit
                            </a>
                            </button>
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(65px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">


														<li><a href="{{ url('/admin/delete/info') }}/{{ $info->id }}">Trash</a></li>

													</ul>
												</div>

                          </td>
                        </tr>
                      @empty
                        No Baner
                      @endforelse


                    </tbody>
                  </table>

                  {{ $infos->links() }}
                </div>
      </div>
    </div>



</div>

<!-- trashed -->
<div class="container">
<div class="row row-deck">

    <div class="col-md-12">
      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Trashed</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Headline</th>
                        <th>Message</th>
                        <th>Banner</th>
                        <th>Deleted</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($trashed_infos as $trashed_info)
                        <tr>
                          <th scope="row"> {{ $trashed_info->id }} </th>
                          <td> {{ $trashed_info->Info_headline }} </td>
                          <td> {{ Str::limit($trashed_info->Info_message, 10) }} </td>
                          <td> <img src="{{ asset('uploads/info') }}/{{ $trashed_info->Info_banner }}" alt="{{ $trashed_info->Info_banner }}" width="80px"> </td>

                          <td> {{ $trashed_info->deleted_at->diffForHumans() }} </td>
                          <td>


                            <div class="btn-group mt-2 mb-2">

                            <a href="{{ url('/admin/restore/info') }}/{{ $trashed_info->id }}" class="btn btn-primary">Restore</a>





                          </ul>
                        </div>

                          </td>
                        </tr>
                      @empty

                        <td> No Trashed</td>

                      @endforelse


                    </tbody>
                  </table>

                  <!-- {{ $infos->links() }} -->
                </div>
    </div>
    </div>
  </div>
</div>

</div>

@endsection
