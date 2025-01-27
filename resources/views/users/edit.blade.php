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
<form action="{{route('users.update',$user)}}" method="post">
    @csrf
    @method('patch')
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Enter Your Name" value="{{old('name',$user->name)}}">
    <br>
    <select name="role" @selected($user->role)>
        <option value="user">user</option>
        <option value="operator">Operator</option>
    </select>
    <br>
    <input type="submit" value="Update">
</form>
</body>
</html>
