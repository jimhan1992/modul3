<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 50%">
<form method="post" action="/display-discount">
    @csrf
    <div class="form-group">
        <label for="">Product Description</label>
        <input type="text" class="form-control" id="" name="description">
    </div>
    <div class="form-group">
        <label for="">List Price:</label>
        <input type="number" class="form-control" id="" name="price">
    </div>
    <div class="form-group">
        <label for="">Discount Percent:</label>
        <input type="number" class="form-control" id="" name="percent">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Calculate Discount</button>
</form>
</div>
</body>
</html>
