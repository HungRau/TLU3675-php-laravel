$<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4>Edit & Update Student
                          <a href="{{ url('students') }}" class="btn btn-danger float-end">BACK</a>
                      </h4>
                  </div>
                  <div class="card-body">
  
                      <form action="{{ url('update-student/'.$student->id) }}" method="POST">
                          @csrf
                          @method('PUT')
  
                          <div class="form-group mb-3">
                              <label for="">Student Name</label>
                              <input type="text" name="name" value="{{$student->fullname}}" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                              <label for="">Student Birthday</label>
                              <input type="text" name="birthday" value="{{$student->birthday}}" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                              <label for="">Student Address</label>
                              <input type="text" name="address" value="{{$student->address}}" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                              <button type="submit" class="btn btn-primary">Update Student</button>
                          </div>
  
                      </form>
  
                  </div>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>