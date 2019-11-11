@extends('dashboard.trainee_registration.app')

@section('title')
  BACCO Quater
@endsection

@section('css')
<!-- Styles -->
    <link href="{{ asset('custom/seip_reg/assets/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
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


<div class="content-wrap">
        <div class="main">

				<div class="main-content">
          <div class="container">
					    <div class="row">
						<div class="col-lg-6 offset-md-3">

              <form action="{{ route('quarter_insert') }}" method="post">
                @csrf
                <div class="form-group text-center">
                  <hr>
                    <h3>Add Quater</h3>
                  <hr>
                </div>

                <div class="form-group">
                  <label for="quarter">Quater Number</label>
                  <input id="quarter" type="text" name="quarter" value="{{ old('quarter') }}" class="form-control">
                </div>

                {{-- <div class="form-group">
                  <label for="status">Status</label>
                  <input id="status" type="text" name="quarter" value="{{ old('quarter') }}" class="form-control">
                </div> --}}

                <button type="submit" class="btn btn-primary">Send Data</button>

              </form>

						</div><!-- /# column -->
          </div><!-- /# row -->
          </div>


          <div class="container">
					    <div class="row">
						<div class="col-lg-6 offset-md-3">

              <div class="text-center bg-dark text-light">
                <hr>
                <h3>Quarters</h3>
                <hr>
              </div>


              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Quarter</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($quarters as $quarter)
                      <tr>
                        <th scope="row">{{ $quarter->id }}</th>
                        <td>{{ $quarter->quarter }}</td>
                        <td>{{ $quarter->status == 1 ? 'Active' : 'Deactive' }}</td>
                        <td>
                            <a href="{{ url('/admin/quarter') }}/{{ $quarter->id }}/{{ $quarter->status }}" class="btn btn-primary">{{ $quarter->status == 1 ? 'Make Deactive' : 'Make Active' }}</a>


                            {{-- <form action="quarter_status_update" method="post">
                              @csrf
                              <input type="hidden" name="quater_id" value="{{ $quarter->id }}">
                              <select class="form-control" name="status">
                                <option value="1">Make Active</option>
                                <option value="2">Make Deactive</option>
                              </select>

                              <button type="submit" class="btn btn-primary">Update</button>

                            </form> --}}

                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>

						</div><!-- /# column -->
          </div><!-- /# row -->
          </div>


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
