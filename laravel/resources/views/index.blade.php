<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>crud test</title>
</head>
<body>
<form>
<button type="button" class="btn m-2 btn-dark"><a href="{{URL::route('addName')}}">add product +</a></button>
@foreach($products as $product)
<div class="card">
  <div class="card-body">
  {{$product->name}}
  </div>
</div>
@endforeach
</body>
</html>