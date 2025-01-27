<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Dashboard</h1>
<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" style="background-color: darkred;color: white;padding: 8px 12px;border-radius: 10px;border: 0;outline: none">Logout</button>
</form>
<nav>
    <a href="{{route('products.index')}}" style="display: inline-block;margin-top: 12px;background-color: #1a202c;color: whitesmoke; padding: 6px 12px">Products</a>
    <a href="" style="display: inline-block;margin-top: 12px;background-color: #1a202c;color: whitesmoke; padding: 6px 12px">Users</a>
</nav>
</body>
</html>
