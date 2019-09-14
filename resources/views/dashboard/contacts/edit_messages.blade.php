@extends('dashboard.app')

@section('title')
  All Contacts
@endsection



@section('content')


<div class="container">

    <div class="col-md-12 col-lg-12">
				  <div class="card">

              <form>

                <fieldset class="form-group">
                  <input type="hidden" name="message_id" value="{{ $single_edit_message->id }}">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="status" value="{{ $single_edit_message->status }}">

                </fieldset>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


			     </div>
    </div>
</div>


@endsection
