<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User-Add</title>
</head>
<body>
<h1>User-Add</h1>
<form action="{{route('users.store')}}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter Your Name">
    <br>
    <label for="">Email</label>
    <input type="text" name="email" placeholder="Enter Your Email">
    <br>
    <select name="role">
        <option value="user">user</option>
        <option value="operator">Operator</option>
    </select>
    <br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter Your Password">
    <br>
    <input type="submit" value="Add">
</form>
</body>
</html>
