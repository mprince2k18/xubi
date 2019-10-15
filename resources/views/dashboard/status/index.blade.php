@extends('dashboard.app')


@section('title')
 Status
@endsection


@section('content')

<div class="container">
  <div class="row">

    <div class="col-md-6">



      <form action="{{ route('add_education_qualification') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Education Qualification</h3>
        </div>
        <div class="card-body">

          <div class="form-group">

            <label class="form-label"> Add Education Qualification</label>
            <input class="form-control" name="education_qualification" placeholder="text here..">

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


    <div class="col-md-6">

      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Clients</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Education Qualification</th>

                      </tr>
                    </thead>
                    <tbody>

                      @forelse($education_qualifications as $education_qualification)
                      <tr>

                        <th scope="row">{{ $education_qualification->id }}</th>
                        <td>{{ $education_qualification->education_qualification }}</td>

                        <td>
                          <a href="#" class="btn-sm btn-primary">Edit</a>
                          <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                      <td>No Education Qualification Here</td>
                      @endforelse



                    </tbody>
                  </table>


                    {{ $education_qualifications->links() }}

                </div>
                <!-- table-responsive -->
              </div>

    </div>


  </div>
</div>

<div class="container">

  <div class="row">

    <div class="col-md-6">



      <form action="{{ route('add_working_status') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Working Status</h3>
        </div>
        <div class="card-body">

          <div class="form-group">

            <label class="form-label"> Add Working Status</label>
            <input class="form-control" name="working_status" placeholder="text here..">

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


    <div class="col-md-6">

      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Clients</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Working Status</th>

                      </tr>
                    </thead>
                    <tbody>

                      @forelse($working_statuses as $working_status)
                      <tr>

                        <th scope="row">{{ $working_status->id }}</th>
                        <td>{{ $working_status->working_status }}</td>

                        <td>
                          <a href="#" class="btn-sm btn-primary">Edit</a>
                          <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                      <td>No Education Qualification Here</td>
                      @endforelse



                    </tbody>
                  </table>


                    {{ $working_statuses->links() }}

                </div>
                <!-- table-responsive -->
              </div>

    </div>


  </div>

</div>

<div class="container">

  <div class="row">

    <div class="col-md-6">



      <form action="{{ route('add_gender_status') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Gender Status</h3>
        </div>
        <div class="card-body">

          <div class="form-group">

            <label class="form-label"> Add Gender Status</label>
            <input class="form-control" name="gender" placeholder="text here..">

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


    <div class="col-md-6">

      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Gender</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Gender Status</th>

                      </tr>
                    </thead>
                    <tbody>

                      @forelse($gender_statuses as $gender_status)
                      <tr>

                        <th scope="row">{{ $gender_status->id }}</th>
                        <td>{{ $gender_status->gender }}</td>

                        <td>
                          <a href="#" class="btn-sm btn-primary">Edit</a>
                          <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                      <td>No Education Qualification Here</td>
                      @endforelse



                    </tbody>
                  </table>


                    {{ $working_statuses->links() }}

                </div>
                <!-- table-responsive -->
              </div>

    </div>


  </div>

</div>

<div class="container">

  <div class="row">

    <div class="col-md-6">



      <form action="{{ route('add_information_source') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Information Source Status</h3>
        </div>
        <div class="card-body">

          <div class="form-group">

            <label class="form-label">Add Information Source Status</label>
            <input class="form-control" name="information_source" placeholder="text here..">

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


    <div class="col-md-6">

      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Information Source</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Gender Status</th>

                      </tr>
                    </thead>
                    <tbody>

                      @forelse($information_sources as $information_source)
                      <tr>

                        <th scope="row">{{ $information_source->id }}</th>
                        <td>{{ $information_source->information_source }}</td>

                        <td>
                          <a href="#" class="btn-sm btn-primary">Edit</a>
                          <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                      <td>No Education Qualification Here</td>
                      @endforelse



                    </tbody>
                  </table>


                    {{ $working_statuses->links() }}

                </div>
                <!-- table-responsive -->
              </div>

    </div>


  </div>

</div>

<div class="container">

  <div class="row">

    <div class="col-md-6">



      <form action="{{ route('add_seip_status') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Seip Status</h3>
        </div>
        <div class="card-body">

          <div class="form-group">

            <label class="form-label">Add Seip Status</label>
            <input class="form-control" name="seip_status" placeholder="text here..">

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


    <div class="col-md-6">

      <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Seip Status</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Gender Status</th>

                      </tr>
                    </thead>
                    <tbody>

                      @forelse($seip_statuses as $seip_status)
                      <tr>

                        <th scope="row">{{ $seip_status->id }}</th>
                        <td>{{ $seip_status->seip_status }}</td>

                        <td>
                          <a href="#" class="btn-sm btn-primary">Edit</a>
                          <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                      <td>No Education Qualification Here</td>
                      @endforelse



                    </tbody>
                  </table>


                    {{ $seip_statuses->links() }}

                </div>
                <!-- table-responsive -->
              </div>

    </div>


  </div>

</div>

<div class="container">

  <div class="row">

    <div class="col-md-6">



      <form action="{{ route('add_remarks_status') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Add Remarks Status</h3>
        </div>
        <div class="card-body">

          <div class="form-group">

            <label class="form-label">Add Remarks Status</label>
            <input class="form-control" name="remarks_status" placeholder="text here..">

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


    <div class="col-md-6">

      <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> Remarks Status</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Remarks</th>

                      </tr>
                    </thead>
                    <tbody>

                      @forelse($remarks_statuses as $remarks_status)
                      <tr>

                        <th scope="row">{{ $remarks_status->id }}</th>
                        <td>{{ $remarks_status->remarks_status }}</td>

                        <td>
                          <a href="#" class="btn-sm btn-primary">Edit</a>
                          <a href="#" class="btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>
                      @empty
                      <td>No Education Qualification Here</td>
                      @endforelse



                    </tbody>
                  </table>


                    {{ $seip_statuses->links() }}

                </div>
                <!-- table-responsive -->
              </div>

    </div>


  </div>

</div>


@endsection
