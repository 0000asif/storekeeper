<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <title>Add Product</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <h3 class="mt-3">Add a New Product</h3>
       
      <div class="col-6">
        <a class="btn btn-info mb-3" href="{{route('index')}}" >{{__('Back')}}</a>
        <form action="{{Route('product.add')}}" method="post">
          @csrf
          <input type="text" placeholder="Product Name" class="form-control mb-3" name="name">
          <input type="number" placeholder="Product quantity" class="form-control mb-3" name="quantity">
          <input type="number" step="0.01" placeholder="Product Price" class="form-control mb-3" name="price">
          <button type="submit" class="btn btn-primary">Create</button>
          <button type="reset" class="btn btn-warning">Reset</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>