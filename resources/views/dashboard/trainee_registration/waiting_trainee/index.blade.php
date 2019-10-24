@extends('dashboard.trainee_registration.app')

@section('title')
  Waiting Trainee List
@endsection

@section('css')
<!-- Styles -->
    <link href="{{ asset('custom/seip_reg/assets/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('content')


<div class="content-wrap">
        <div class="main">

				<div class="main-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="card alert">
								<div class="bootstrap-data-table-panel">
									<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th>Quarter</th>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>University</th>
												<th>NID</th>
												{{-- <th>Rocket</th> --}}
												<th>Education</th>
												<th>Working</th>
												<th>SEIP Status</th>
												<th>Remarks</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                      @foreach ($waiting_trainees as $waiting_trainee)
                        <tr>
                          <td>{{ $waiting_trainee->trainee_id }}</td>
                          <td>{{ $waiting_trainee->name }}</td>
                          <td>{{ $waiting_trainee->quarter_id }}</td>
                          <td>{{ $waiting_trainee->email }}</td>
                          <td>{{ $waiting_trainee->phone }}</td>
                          <td>{{ $waiting_trainee->university }}</td>
                          <td>{{ $waiting_trainee->nid }}</td>
                          {{-- <td>{{ $waiting_trainee->rocket_number === ' ' ? $waiting_trainee->rocket_number : 'Null'  }}</td> --}}
                          <td>

                            {{ $waiting_trainee->relationBetweenEducation->education_qualification }}

                          </td>
                          <td>
                            {{ $waiting_trainee->relationBetweenWork->working_status }}
                          </td>
                          <td>
                            {{ $waiting_trainee->relationBetweenSeip->seip_status }}
                          </td>
                          <td>
                            {{ $waiting_trainee->relationBetweenRemarks->remarks_status }}
                          </td>
                          <td>
                              <a href="{{ '/admin/trainee' }}/{{ $waiting_trainee->id }}" class="btn btn-primary">open</a>
                          </td>
                        </tr>
                      @endforeach

										</tbody>
									</table>
								</div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
				</div><!-- /# main content -->

        </div><!-- /# main -->
    </div><!-- /# content wrap -->


@endsection

@section('js')

<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/buttons.dataTables.min.html') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/buttons.flash.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/jszip.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
<script src="{{ asset('custom/seip_reg/assets/js/lib/data-table/datatables-init.js') }}"></script>

@endsection
