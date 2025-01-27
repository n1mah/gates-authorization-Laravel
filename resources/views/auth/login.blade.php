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
<h1>Login</h1>
<form action="{{route('login')}}" method="post">
    @csrf
    <label for="">Email</label>
    <input type="text" name="email" placeholder="Enter Your Email">
    <br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter Your Password">
    <br>
    <input type="submit" value="Login">
</form>
<br>
<a href="{{route('register.form')}}">Register</a>
</body>
</html>
