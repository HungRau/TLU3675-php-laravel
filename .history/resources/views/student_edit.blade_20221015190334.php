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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
      <div class="row">
          <div class="col-md-12 mt-6">
                
              <div class="card">
                  <div class="card-header">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                      <a href="{{ url('student-manage') }}" class="btn btn-dark btn-sm float-left"><<</a>
                      <h4 class="text-left fw-bold">Edit & Update Student</h4>
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