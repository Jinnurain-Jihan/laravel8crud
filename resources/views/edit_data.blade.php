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
        <a class="btn btn-info mb-3" href="{{ url('/')}}">Show Data</a>
       <div class="shadow p-5 m-5">
        
        <form action="{{ url('/update-data/'.$editdata->id)}}" method="POST">
           @csrf 
            <div class="form-group">
                <label for="name" class="mb-1">Name:</label>
                <input type="text" value="{{ $editdata->name}}" class="form-control py-2" id="name" name="name" placeholder="Enter Your Name">
                @error('name')
                <span class="text-danger">{{ $message}}</span>
                @enderror 
            </div>
            <div class="form-group">
                <label for="email" class="mb-1">Email:</label>
                <input type="text" value="{{ $editdata->email}}"  class="form-control py-2" id="email" name="email" placeholder="Enter Your Email">
                @error('email')
                <span class="text-danger">{{ $message}}</span>
                @enderror 
            </div>
            <input type="submit" name="submit" class="btn btn-warning btn-block mt-4" value="Submit">
        </form>
       </div>
    </div>
</body>
</html>