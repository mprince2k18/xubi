@extends('dashboard.app')

@section('title')
  Team
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

<!-- Add team member -->

    <div class="col-lg-6 col-sm-12">

      <form method="post" class="card" action="{{ route('team_insert') }}" enctype="multipart/form-data">
        @csrf
									<div class="card-header">
										<h3 class="card-title">Add Team Member</h3>
									</div>
									<div class="card-body">
                    <!-- Name -->
										<div class="form-group">
											<label class="form-label">Enter Name</label>
											<input type="text" class="form-control" placeholder="Name" name="name">
										</div>

                    <div class="form-group">
                      <label class="form-label">Enter Designation</label>
                      <input type="text" class="form-control" placeholder="Enter Designation" name="designation">
                    </div>

                    <!-- file uploads -->
                      <div class="dropify-wrapper" style="height: 192px;">

                        <label class="form-label">Team Photo</label>

                        <div class="dropify-loader" style="display: none;"></div>
                        <div class="dropify-errors-container"><ul></ul></div>

                        <input type="file" class="dropify" data-height="180" name="team_photo">

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

  <!-- Add team member end -->

  <!-- View team member -->

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
													<th>Designation</th>
													<th>Photo</th>
													<th>Created At</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

                        @forelse($team_members as $team_member)
                        <tr>
                          <th scope="row">{{ $team_member->id }}</th>
                          <td>{{ $team_member->name }}</td>
                          <td>{{ $team_member->designation }}</td>

                          <td>
                            <img src="{{ asset('uploads/team') }}/{{ $team_member->team_photo }}" alt="{{ $team_member->name }}">
                          </td>

                          <td>{{ $team_member->created_at->diffForHumans() }}</td>
                          <td>
                            <a href="{{ url('/admin/team/edit') }}/{{ $team_member->id }}" class="btn-sm btn-primary">Edit</a>
                            <a href="{{ url('/admin/team/delete') }}/{{ $team_member->id }}" class="btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        @empty
                        <td>No Team Members Here</td>
                        @endforelse



											</tbody>
										</table>


                      {{ $team_members->links() }}


									</div>
									<!-- table-responsive -->
								</div>



  		</div>

    <!-- View team member end -->

  </div>

</div>



@endsection
