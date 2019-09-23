@extends('dashboard.app')

@section('title')
  Clients
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

<div class="container">
  <div class="row">

<!-- Add Clients -->

    <div class="col-lg-6 col-sm-12">

      <form method="post" class="card" action="{{ route('insert') }}" enctype="multipart/form-data">
        @csrf
									<div class="card-header">
										<h3 class="card-title">Add Client</h3>
									</div>
									<div class="card-body">
                    <!-- Name -->
										<div class="form-group">
											<label class="form-label">Client Name</label>
											<input type="text" class="form-control" placeholder="Client Name" name="client_name">
										</div>


                    <!-- Client Desc -->
                    <div class="form-group">
                      <label class="form-label">Client Description (Optional)</label>
                      <textarea name="client_description" class="form-control" rows="7"></textarea>
                    </div>


                    <!-- file uploads -->
                      <div class="dropify-wrapper" style="height: 192px;">

                        <label class="form-label">Client Photo</label>

                        <div class="dropify-loader" style="display: none;"></div>
                        <div class="dropify-errors-container"><ul></ul></div>

                        <input type="file" class="dropify" data-height="180" name="client_photo">

                        <button type="button" class="dropify-clear">Remove</button>


                      </div>
                      <!-- file uploads end -->


									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Send data</button>
										</div>
									</div>
								</form>

		</div>

  <!-- Add Clients end -->

  <!-- View Clients -->

  <div class="col-lg-6 col-sm-12">

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Clients</h3>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Desc</th>
                      <th>Photo</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse($all_clients as $all_client)
                    <tr>
                      <th scope="row">{{ $all_client->id }}</th>
                      <td>{{ $all_client->client_name }}</td>
                      <td>{{ $all_client->client_desc }}</td>

                      <td>
                        <img src="{{ asset('uploads/clients') }}/{{ $all_client->client_photo }}" alt="{{ $all_client->name }}">
                      </td>

                      <td>{{ $all_client->created_at->diffForHumans() }}</td>
                      <td>
                        <a href="#" class="btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    @empty
                    <td>No Clients Here</td>
                    @endforelse



                  </tbody>
                </table>


                  {{ $all_clients->links() }}

              </div>
              <!-- table-responsive -->
            </div>



  </div>

  </div>

</div>



@endsection
