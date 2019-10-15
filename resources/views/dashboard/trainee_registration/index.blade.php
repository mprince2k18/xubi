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
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

                      @foreach ($Seip_registered_trainees as $Seip_registered_trainee)
                        <tr>
                          <td>{{ $Seip_registered_trainee->trainee_id }}</td>
                          <td>{{ $Seip_registered_trainee->name }}</td>
                          <td>{{ $Seip_registered_trainee->quarter_id }}</td>
                          <td>{{ $Seip_registered_trainee->email }}</td>
                          <td>0{{ $Seip_registered_trainee->phone }}</td>
                          <td>{{ $Seip_registered_trainee->university }}</td>
                          <td>{{ $Seip_registered_trainee->nid }}</td>
                          <td>0{{ $Seip_registered_trainee->rocket_number }}</td>
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
                          <td>
                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">OPEN</a>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

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
<!-- {{ asset('custom/seip_reg/') }} -->

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
