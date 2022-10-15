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
            <div class="col-12 text-center pt-5">
                <div class="text-left"><a href="product/create" class="btn btn-outline-primary">Add new
                    product</a></div>
    
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">Product Title</th>
                            <th scope="col" class="pr-5">Price (USD)</th>
                            <th scope="col">Short Notes</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
					<tr>
						<td>{!! $product->title !!}</td>
						<td class="pr-5">{!! $product->price !!}</td>
						<td>{!! $product->short_notes !!}</td>
						<td><a href="product/{!! $product->id !!}/edit"
							class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger ml-1"
								onClick='showModel({!! $product->id !!})'>Delete</button></td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No products found</td>
					</tr>
					@endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>