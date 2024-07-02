<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <title>View Product</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <h3 class="mt-3">view Product</h3>
       
      <div class="col-6">
        <a class="btn btn-info mb-3" href="{{route('index')}}" >{{__('Back')}}</a>
        <table class="table table-striped table-bordered">
          @foreach ($data as $product)
          <tr>
            <td>id</td>
            <td>{{$product->id}}</td>
          </tr>

          <tr>
            <td>name</td>
            <td>{{$product->name}}</td>
          </tr>

          <tr>
            <td>quantity</td>
            <td>{{$product->quantity}}</td>
          </tr>

          <tr>
            <td>price</td>
            <td>{{$product->price}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>