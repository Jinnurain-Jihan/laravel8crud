<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Laravel CRUD</title>
</head>
<body>
    <div class="container py-5 shadow">
        <a class="btn btn-info mb-3" href="{{ url('add-data')}}">Add Data</a>
        @if(Session::has('msg'))
            <p class="alert alert-success">{{ Session::get('msg')}}</p>
        @endif
        <table class="table table-responsive table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($showdata as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                  <a href="{{ url('/edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
                  <a href="{{ url('/delete-data/'.$data->id)}}" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $showdata->links()}}
    </div>
</body>
</html>