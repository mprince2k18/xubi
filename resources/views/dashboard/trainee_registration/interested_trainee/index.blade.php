@extends('dashboard.trainee_registration.app')

@section('title')
  All SEIP Trainee Registered List
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
												<th>Rocket</th>
												<th>Education</th>
												<th>Working</th>
												<th>SEIP Status</th>
												<th>Remarks</th>
											</tr>
										</thead>
										<tbody>

                      @foreach ($Seip_registered_trainees as $Seip_registered_trainee)
                        <tr>
                          <td>{{ $Seip_registered_trainee->trainee_id }}</td>
                          <td>{{ $Seip_registered_trainee->name }}</td>
                          <td>{{ $Seip_registered_trainee->quarter_id }}</td>
                          <td>{{ $Seip_registered_trainee->email }}</td>
                          <td>{{ $Seip_registered_trainee->phone }}</td>
                          <td>{{ $Seip_registered_trainee->university }}</td>
                          <td>{{ $Seip_registered_trainee->nid }}</td>
                          <td>{{ $Seip_registered_trainee->rocket_number === ' ' ? $Seip_registered_trainee->rocket_number : 'Null'  }}</td>
                          <td>

                            {{ $Seip_registered_trainee->relationBetweenEducation->education_qualification }}

                          </td>
                          <td>
                            {{ $Seip_registered_trainee->relationBetweenWork->working_status }}
                          </td>
                          <td>
                            {{ $Seip_registered_trainee->relationBetweenSeip->seip_status }}
                          </td>
                          <td>
                            {{ $Seip_registered_trainee->relationBetweenRemarks->remarks_status }}
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
