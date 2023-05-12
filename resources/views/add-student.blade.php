<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Student</h2>
                <!-- display an alert when student added succesfully / get from StudentController saveStudent function-->
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <!-- -->
                <br>
                <form method="post" action="{{url('save-student')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                        @error('phone')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" placeholder="Enter Address">{{old('address')}}</textarea>
                        @error('address')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <a href="{{url('student_list')}}" class="btn btn-danger" style="margin-right:0%; float: right;">Back</a>
                    <button type="submit" class="btn btn-primary" style="margin-right:5%; float: right;">submit</button> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>