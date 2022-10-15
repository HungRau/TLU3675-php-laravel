<!doctype html>
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
    <nav class="navbar navbar-expand navbar-light bg-light">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Nav 1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nav 2</a>
            </li>
        </ul>
    </nav>
    <div class="container">
      <div class="row">
          <div class="col-md-12 mt-5">@if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
              <div class="card">
                  <div class="card-header">
                      <a href="{{ url('student-manage') }}" class="btn btn-secondary btn-sm float-left"><<</a>
                      <h4 class="text-center fw-bold">Edit & Update Student</h4>
                  </div>
                  <div class="card-body">
                      <form action="{{ url('student-update/'.$students->id) }}" method="POST">
                          @csrf
                          @method('PUT')
  
                          <div class="form-group mb-3">
                              <label for="">Student Name</label>
                              <input type="text" name="fullname" value="{{$students->fullname}}" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                              <label for="">Student Birthday</label>
                              <input type="text" name="birthday" value="{{$students->birthday}}" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                              <label for="">Student Address</label>
                              <input type="text" name="address" value="{{$students->address}}" class="form-control">
                          </div>
                          <div class="form-group mb-3">
                              <button type="submit" class="btn btn-primary">Update Student</button>
                          </div>
  
                      </form>
                  </div>
                  {{-- Thông báo thành công --}}
                
              </div>
          </div>
      </div>
  </div>

  </body>
</html>