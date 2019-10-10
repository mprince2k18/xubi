@extends('dashboard.app')

@section('css')

@endsection

@section('title')
  Career
@endsection



@section('content')


  <div class="container">


  <div class="row row-deck">
    <div class="col-lg-6">

      <form action="{{ route('career_create') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Add Career Post</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label">Post Name</label>
            <input type="text" class="form-control" name="post_name" value="{{ old('post_name') }}">


            <label class="form-label">Job Schedule Name</label>
            <input type="text" class="form-control" name="schedule" value="{{ old('schedule') }}">


            <label class="form-label">Salary Range</label>
            <input type="text" class="form-control" name="salary_range" value="{{ old('salary_range') }}">


            <label class="form-label">Educational Background</label>
            <input type="text" class="form-control" name="educational_background" value="{{ old('educational_background') }}">

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
  </div>
</div>
@endsection

@section('js')

@endsection
