<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Student List</h2>
                <br>
                <div style="margin-right:0%; float: right;">
                    <a href="{{url('add-student')}}" class="btn btn-primary">Add Student</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($get_student_details as $gsd)
                            <tr>
                                <td>{{$gsd->id}}</td>
                                <td>{{$gsd->name}}</td>
                                <td>{{$gsd->email}}</td>
                                <td>{{$gsd->phone}}</td>
                                <td>{{$gsd->address}}</td>
                                <td><a href="{{url('edit-student/'.$gsd->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('delete-student/'.$gsd->id)}}" class="btn btn-danger">Delete</a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>