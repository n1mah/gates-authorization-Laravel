<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product-Add</title>
</head>
<body>
<h1>Product-Add</h1>
<form action="{{route('products.store')}}" method="post">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title" placeholder="Enter Your Title">
    <br>
    <label for="">Title</label>
    <textarea name="description" placeholder="Enter Your Description"></textarea>
    <br>
    <label for="">Price</label>
    <input type="number" name="price" placeholder="Enter Your Price">
    <br>
    <input type="submit" value="Add">
</form>
</body>
</html>
