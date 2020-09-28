<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
</head>
<body>

<div class="form-group">
    <hr>
<form action="{{ route('update') }}" method="post" >
    @csrf
    <label for="exampleInputEmail1">update weapon name?</label>
    <input type="hidden" class="form-control" name="id" value="{{ $weapon->id }}">
    <input type="text" class="form-control" placeholder="{{ $weapon->name }}" name="name" value="{{ $weapon->name }}">
    <button type="submit" class="btn btn-primary btn-lg btn-block">update name</button>
</form>

</div>

</body>
</html>