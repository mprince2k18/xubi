@extends('layouts.app')

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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update') }} {{ $single_user->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('single_user.update') }}">
                        @csrf

                        <input type="hidden" value="{{ $single_user->id }}" name="user_id">


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{ $single_user->name }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" value="{{ $single_user->email }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="role_id">
                                  <option value="{{ $single_user->role_id }}" class="bg-dark text-white">{{ $single_user->role_id == 2 ? 'Admin' : 'Agent' }}</option>
                                  <option value="2">Admin</option>
                                  <option value="3">Agent</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Activation') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="active">
                                  <option value="{{ $single_user->active }}" class="bg-dark text-white">{{ $single_user->active == 1 ? 'Active' : 'Deactive' }}</option>
                                  <option value="1">Active</option>
                                  <option value="2">Deactive</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
