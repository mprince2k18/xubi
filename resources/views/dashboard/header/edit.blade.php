@extends('dashboard.app')

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
            <textarea class="form-control" name="header_headline" rows="7" placeholder="text here..">{{ $single_banner_edit->header_headline }}</textarea>

            <label class="form-label">Message
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" name="header_message" rows="7" placeholder="text here..">{{ $single_banner_edit->header_message }}</textarea>

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
