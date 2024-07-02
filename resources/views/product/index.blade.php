{{-- <h2>all product list</h2>

@foreach ($data as $id => $product )
    <h3>{{ $product -> id}} </h3> <br>
    <h3>{{ $product -> name}} </h3> <br>
    <h3>{{ $product -> quantity}} </h3> <br>
    <h3>{{ $product -> price}} </h3>
@endforeach --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>products</title>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="mt-3">All Product List</h3>
        <a href="/newproduct" class="btn btn-primary mb-3">Add Product</a>
        <table class="table table-bordered table-striped">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>View</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
        @foreach ( $data as $product )
            <tr>
              <td>{{$product->id}} </td>
              <td>{{$product->name}} </td>
              <td>{{$product->quantity}} </td>
              <td>{{$product->price}} </td>
              <td><a href="{{Route('product.view',$product->id)}}" class="btn btn-success center">View</a></td>
              <td><a href="{{Route('product.delete', $product->id)}}" class="btn btn-danger">Delete</a></td>
              <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">Update</a></td>
            </tr>
        @endforeach
        
      </table>
      </div>
    </div>
  </div>
</body>
</html>