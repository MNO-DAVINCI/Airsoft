<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <title>crud test</title>
</head>
<body>
<form>
<button type="button" class="btn m-2 btn-dark"><a href="{{URL::route('addName')}}">add product +</a></button>
@foreach($airsofts as $airsoft)
<div class="card">
  <div class="card-body">
  <h5>{{$airsoft->name}}</h5> 
  <a href="#"> <span class="far fa-edit float-right" style="margin:5px;"></span></a>
  <a href="{{URL::route('deletepage', $airsoft->id)}}"> <span class="fas fa-times text-danger float-right" style="margin:5px;"></span></a>
  </div>
  
</div>
@endforeach
</body>
</html>