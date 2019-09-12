
@extends('dashboard.app')

@section('title')
  Update Address
@endsection



@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-md-2">



          <form action="{{ route('update_address') }}" method="post" class="card">
            @csrf
            <div class="card-body">
              <input type="hidden" class="form-control" name="address_id" placeholder="id.." value="{{ $old_addresses->id }}"></input>

              <div class="form-group">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" rows="3" placeholder="Address..">{{ $old_addresses->address }}</textarea>
              </div>

              <div class="form-group">
                <label class="form-label">Map</label>
                <textarea class="form-control" name="map" rows="3" placeholder="Map..">{{ $old_addresses->map }}</textarea>
              </div>


              <div class="form-group">
                <label class="form-label">Phone</label>
                <input class="form-control" name="phone" placeholder="Phone.." value="{{ $old_addresses->phone }}"></input>
              </div>


              <div class="form-group">
                <label class="form-label">Mobile</label>
                <input class="form-control" name="mobile" placeholder="Mobile.." value="{{ $old_addresses->mobile }}"></input>
              </div>



              <div class="form-group">
                <label class="form-label">Email 1</label>
                <input class="form-control" name="email1" placeholder="Email 1.." value="{{ $old_addresses->email1 }}"></input>
              </div>


              <div class="form-group">
                <label class="form-label">Email 2</label>
                <input class="form-control" name="email2" placeholder="Email 2.." value="{{ $old_addresses->email2 }}"></input>
              </div>



              <div class="form-group">
                <label class="form-label">Social Accounts</label>
                <input class="form-control" name="facebook" placeholder="Facebook.." value="{{ $old_addresses->facebook }}"></input>
                <input class="form-control" name="twitter" placeholder="Twitter.." value="{{ $old_addresses->twitter }}"></input>
                <input class="form-control" name="linkedin" placeholder="Linkedin.." value="{{ $old_addresses->linkedin }}"></input>
                <input class="form-control" name="instagram" placeholder="Instagram.." value="{{ $old_addresses->instagram }}"></input>
                <input class="form-control" name="youtube" placeholder="Youtube.." value="{{ $old_addresses->youtube }}"></input>
              </div>



            <div class="card-footer text-right">
              <div class="d-flex">
                <button type="submit" class="btn btn-primary ml-auto">Update data</button>
              </div>
            </div>
          </form>
        </div>
      </div>





  </div>




              @endsection
