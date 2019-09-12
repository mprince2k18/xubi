
@extends('dashboard.app')

@section('title')
  Address
@endsection



@section('content')

<div class="container">
  <div class="row">

    @if (session('success'))
   <div class="alert alert-success">
       {{ session('success') }}
   </div>
   @endif

   @if (session('update'))
  <div class="alert alert-success">
      {{ session('update') }}
  </div>
  @endif
  
    <div class="col-lg-6">



          <form action="{{ route('add_address') }}" method="post" class="card">
            @csrf
            <div class="card-body">


              <div class="form-group">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" rows="3" placeholder="Address.."></textarea>
              </div>


              <div class="form-group">
                <label class="form-label">Phone</label>
                <input class="form-control" name="phone" placeholder="Phone.."></input>
              </div>


              <div class="form-group">
                <label class="form-label">Mobile</label>
                <input class="form-control" name="mobile" placeholder="Mobile.."></input>
              </div>



              <div class="form-group">
                <label class="form-label">Email 1</label>
                <input class="form-control" name="email1" placeholder="Email 1.."></input>
              </div>


              <div class="form-group">
                <label class="form-label">Email 2</label>
                <input class="form-control" name="email2" placeholder="Email 2.."></input>
              </div>



              <div class="form-group">
                <label class="form-label">Social Accounts</label>
                <input class="form-control" name="facebook" placeholder="Facebook.."></input>
                <input class="form-control" name="twitter" placeholder="Twitter.."></input>
                <input class="form-control" name="linkedin" placeholder="Linkedin.."></input>
                <input class="form-control" name="instagram" placeholder="Instagram.."></input>
                <input class="form-control" name="youtube" placeholder="Youtube.."></input>
              </div>



            <div class="card-footer text-right">
              <div class="d-flex">
                <button type="submit" class="btn btn-primary ml-auto">Send data</button>
              </div>
            </div>
          </form>
        </div>
      </div>




      <div class="col-lg-6">
            <form method="post" class="card">
              <div class="card-body">

                <div class="col-md-12 col-lg-12">
								<div class="card">

									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead>
												<tr>
													<th>Action</th>
													<th>address</th>
													<th>phone</th>
													<th>mobile</th>
													<th>email1</th>
													<th>email2</th>
													<th>facebook</th>
													<th>twitter</th>
													<th>linkedin</th>
													<th>instagram</th>
													<th>youtube</th>
												</tr>
											</thead>
											<tbody>



                        @forelse($addresses as $address)
                        <tr>
                          <th scope="row">
                            <a href="{{ url('/admin/edit_address') }}/{{ $address->id }}" class="btn-sm btn-primary">Edit</a>
                          </th>
                          <td>{{ Str::limit($address->address,6) }}</td>
                          <td>{{ Str::limit($address->phone,8) }}</td>
                          <td>{{ Str::limit($address->mobile,8) }}</td>
                          <td>{{ Str::limit($address->email1,8) }}</td>
                          <td>{{ Str::limit($address->email2,8) }}</td>
                          <td>{{ Str::limit($address->facebook,8) }}</td>
                          <td>{{ Str::limit($address->twitter,8) }}</td>
                          <td>{{ Str::limit($address->linkedin,8) }}</td>
                          <td>{{ Str::limit($address->instagram,8) }}</td>
                          <td>{{ Str::limit($address->youtube,8) }}</td>
                        </tr>
                        @empty

                        @endforelse



											</tbody>
										</table>


                    {{ $addresses->links() }}


									</div>
									<!-- table-responsive -->
								</div>
							</div>

            </form>
          </div>
        </div>
  </div>




              @endsection
