@extends('dashboard.app')

@section('css')
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<!-- include summernote css/js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

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


            <label class="form-label">Job Experience</label>
            <input type="text" class="form-control" name="job_experience" value="{{ old('job_experience') }}">


            <label class="form-label">Deadline</label>
            <input type="date" class="form-control" name="deadline" value="{{ old('deadline') }}">


            <label class="form-label">job Description</label>
            <textarea type="text" class="form-control" id="summernote" name="job_description" value="{{ old('job_description') }}"></textarea>


            <label class="form-label">Key Requirements</label>
            <textarea type="test" class="form-control" id="summernote1" name="key_requirements" value="{{ old('key_requirements') }}"></textarea>


            <label class="form-label">Required Skills</label>
            <input type="test" class="form-control" name="required_skills" value="{{ old('required_skills') }}">

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

<script>
      $('#summernote').summernote({
        tabsize: 1,
        height: 100
      });
</script>

<script>
      $('#summernote1').summernote({
        tabsize: 1,
        height: 100
      });
</script>

@endsection
