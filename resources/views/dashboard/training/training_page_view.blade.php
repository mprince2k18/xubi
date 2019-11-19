@extends('dashboard.app')

@section('title')
  All Training Page
@endsection



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


{{-- content --}}


<div class="container">
  <div class="row">

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Training Pages</h3>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>

                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @forelse($all_training_pages as $all_training_page)
                    <tr>
                      <th scope="row">{{ $all_training_page->id }}</th>
                      <td>{{ $all_training_page->relationshipBetweenTraining->name }}</td>



                      <td>{{ $all_training_page->created_at->diffForHumans() }}</td>
                      <td>
                        <a href="{{ url('/admin/training/page/edit') }}/{{ $all_training_page->id }}" class="btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                    @empty
                    <td>No Training Page Here</td>
                    @endforelse



                  </tbody>
                </table>


                  {{ $all_training_pages->links() }}


              </div>
              <!-- table-responsive -->
            </div>

  </div>

</div>


@endsection
