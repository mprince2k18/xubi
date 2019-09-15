<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Laravel Scout Search Tutorial</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    </head>

   <body>
    <div class="container">
        <h1>Laravel Scout Search Tutorial</h1>
      <form method="GET" action="{{ route('search') }}">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </form>
   <br/>
      
      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @if(count($company_services) > 0)
                @foreach($company_services as $company_service)
                <tr>
                    <td>{{ $company_service->id }}</td>
                    <td>{{ $company_service->service_name }}</td>
                    <td>{{ $company_service->email }}</td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="text-danger">Result not found.</td>
            </tr>
            @endif
        </table>
   </div>
</body>
</html>
