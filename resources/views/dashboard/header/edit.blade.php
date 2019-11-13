@extends('dashboard.app')

@section('css')
<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<!-- include summernote css/js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

@endsection

@section('title')
  Edit Header Banner - "{{ Str::limit($single_banner_edit->header_headline,15) }}"
@endsection



@section('content')

  <div class="container">


    <!-- SESSION -->

        @if (session('update'))
       <div class="alert alert-success">
           {{ session('update') }}
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



  <div class="row row-deck">
    <div class="col-lg-6">
      <form action="{{ route('update_banner') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="banner_id" value="{{$single_banner_edit->id}}">
        <div class="card-header">
          <h3 class="card-title">Header Slider Headline</h3>
        </div>
        <div class="card-body">


          <div class="form-group">
            <label class="form-label">Headline
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" id="summernote" name="header_headline" rows="7" placeholder="text here..">{{ $single_banner_edit->header_headline }}</textarea>

            <label class="form-label">Message
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" id="summernote2" name="header_message" rows="7" placeholder="text here..">{{ $single_banner_edit->header_message }}</textarea>




            <div class="form-group">
              <label class="form-label">link1</label>
              <input class="form-control" type="text" name="link1_button" placeholder="Link1 Name" value="{{ $single_banner_edit->link1_button }}">
              <input class="form-control" type="text" name="link1" placeholder="link1" value="{{ $single_banner_edit->link1 }}">

                    @error('link1_buttton')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @error('link1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>


            <div class="form-group">
              <label class="form-label">link2</label>
              <input class="form-control" type="text" name="link2_button" placeholder="Link2 Name" value="{{ $single_banner_edit->link2_button }}">
              <input class="form-control" type="text" name="link2" placeholder="link2" value="{{ $single_banner_edit->link2 }}">

                    @error('link2_buttton')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @error('link2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              </div>





            <div class="form-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="header_banner"  value="{{ $single_banner_edit->header_banner }}">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>

          </div>
        </div>
        <div class="card-footer text-right">
          <div class="d-flex">
            <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
            <button type="submit" class="btn btn-primary ml-auto">Update data</button>
          </div>
        </div>
      </form>
    </div>

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
        $('#summernote2').summernote({
          tabsize: 1,
          height: 100
        });
  </script>
@endsection
