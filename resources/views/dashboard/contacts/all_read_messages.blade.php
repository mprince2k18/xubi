@extends('dashboard.app')

@section('title')
  All Contacts
@endsection



@section('content')


<div class="container">

  <div class="col-md-12 col-lg-12">
								<div class="card">

									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-primary">
											<thead class="bg-primary text-white">
												<tr>
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Email</th>
													<th class="text-white">Subject</th>
													<th class="text-white">Message</th>
													<th class="text-white">Date</th>
													<th class="text-white">Action</th>
												</tr>
											</thead>
											<tbody>
                        @forelse($all_read_messages as $all_read_message)

                            @if($all_read_message->status == 1)

                            <tr>
                              <th scope="row">{{ $all_read_message->id }}</th>
                              <td>{{ $all_read_message->name }}</td>
                              <td>{{ $all_read_message->email }}</td>
                              <td>{{ Str::limit($all_read_message->subject,10) }}</td>
                              <td>{{ Str::limit($all_read_message->message,10) }}</td>
                              <td>{{ $all_read_message->created_at->format('d-m-Y') }}</td>
                              <td>
                                <a href="#" class="btn btn-primary">Read</a>
                              </td>
                            </tr>

                            @endif

                              @empty
                              No Message


                        @endforelse
											</tbody>
										</table>
                    {{ $all_read_messages->links() }}
									</div>
									<!-- table-responsive -->
								</div>
							</div>

</div>


@endsection
