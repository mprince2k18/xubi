@extends('dashboard.app')

@section('title')
Dashboard
@endsection


@section('content')


<div class="container">

  <div class="row">
      <div class="col-md-12">


        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">EMAIL</th>
                <th scope="col">ACTIVE</th>
                <th scope="col">ROLE</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->active }}</td>
                  <td>{{ $user->role_id }}</td>
                  <td>
                    <a href="{{ url('/single_user') }}/{{ $user->id }}-{{ $user->slug }}" class="btn-sm btn-primary">OPEN</a>
                    {{-- <a href="{{ url('/single_user') }}/{{ $user->id }}" class="btn-sm btn-primary">OPEN</a> --}}
                    <a href="{{ url('/delete_user') }}/{{ $user->id }}" class="btn-sm btn-danger">DELETE</a>
                  </td>
                </tr>

              @endforeach



            </tbody>
          </table>




      </div>
  </div>

</div>


@endsection
