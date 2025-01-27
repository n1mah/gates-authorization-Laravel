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
<h3>User->{{\Illuminate\Support\Facades\Auth::user()->email}}
    <form action="{{route('logout')}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" style="background-color: darkred;color: white;padding: 8px 12px;border-radius: 10px;border: 0;outline: none">Logout</button>
    </form>
</h3>

<h1>Users</h1>
<a href="{{route('users.create')}}">Add User</a>
<br><br>
<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>
                <form action="{{route('users.edit',$user)}}" method="get">
                    @csrf
                    <button type="submit" style="background-color: orangered;color: white;padding: 8px 12px;border-radius: 10px;border: 0;outline: none">Edit</button>
                </form>
                <form action="{{route('users.destroy',$user)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" style="background-color: darkred;color: white;padding: 8px 12px;border-radius: 10px;border: 0;outline: none">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
