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

<h1>Products</h1>
<a href="{{route('products.create')}}">Add Product</a>
<br><br>
<table border="1">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <form action="{{route('products.edit',$product)}}" method="get">
                    @csrf
                    <button type="submit" style="background-color: orangered;color: white;padding: 8px 12px;border-radius: 10px;border: 0;outline: none">Edit</button>
                </form>
                <form action="{{route('products.destroy',$product)}}" method="post">
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
