<!doctype html>
<html lang="en">
  <head>
    <title>Manager</title>
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
            aria-expanded="false" aria-label="Toggle navigation"></button>
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
    {{--  --}}
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                {{-- <div class="text-left"><a href="product/create" class="btn btn-outline-primary">Add new
                    product</a></div> --}}
                <div >
                    <h3 class="text-center">Student</h3> 
                </div>
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" class="pr-5">Full name</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- truyen all dl tu student qua students --}}
                        @forelse($students as $student)  
					<tr>
						<td>{!! $student->id !!}</td>
						<td class="pr-5">{!! $student->fullname !!}</td>
						<td>{!! $student->birthday !!}</td>
                        <td>{!! $student->address !!}</td>
						<td><a href="student-edit/{!! $student->id !!}"
							class="btn btn-outline-primary">Edit</a>
							{{-- <button type="button" class="btn btn-outline-danger ml-1"
								onClick='showModel({!! $student->id !!})'>Delete</button></td> --}}
					</tr>
					@empty
					<tr>
						<td colspan="3">No student found</td>
					</tr>
					@endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>