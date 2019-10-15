@extends('dashboard.app')

@section('title')
  Ceo
@endsection



@section('content')

  <div class="container">





  <div class="row row-deck">
    <div class="col-lg-6">
      <form action="{{ route('ceo_talks') }}" method="post" class="card" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
          <h3 class="card-title">Ceo</h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label class="form-label"> Add Ceo Message

             </label>

            <textarea class="form-control" name="ceo_message" id="editor" rows="7" placeholder="text here.."></textarea>


            <label class="form-label"> Add Ceo Name

             </label>
            <input class="form-control" name="ceo_name" placeholder="text here..">

            <label class="form-label"> Add Ceo Position

             </label>
             <input class="form-control" name="ceo_position" placeholder="text here..">


            <div class="form-group">
                <label class="form-label"> Add Ceo Photo </label>
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="ceo_photo">
					<label class="custom-file-label">Choose file</label>
				</div>
			</div>

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

<!--    All Info-->





</div>


</div>

@endsection
