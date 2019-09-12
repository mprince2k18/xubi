@extends('dashboard.app')

@section('title')
  Header
@endsection



@section('content')

  <div class="container">

  <div class="row row-deck">
    <div class="col-lg-6">
      <form action="{{ route('updateInfo') }}"  method="post" class="card" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="info_id" value="{{ $single_info_edit->id }}">
        <div class="card-header">
          <h3 class="card-title">Info</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label">Headline
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" name="Info_headline" rows="7" placeholder="text here..">{{ $single_info_edit->Info_headline }}</textarea>

            <label class="form-label">Message
               {{-- <span class="form-label-small ml-3">56/100</span> --}}
             </label>
            <textarea class="form-control" name="Info_message" rows="7" placeholder="text here..">{{ $single_info_edit->Info_message }}</textarea>

            <div class="form-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="Info_banner"  value="{{ $single_info_edit->Info_banner }}">
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
