<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="/css/table.css">

    
</head>
<body >
    <h1 >Product</h1>
    <table >
        <tr>
            <th>Name</th>
            <th>QTY</th>
            <th>PRICE</th>
            <th>DESCRIPTION</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td><form method="GET" action="{{route('product.edit',['product'=>$product])}}">
                    <button type="submit" class="edit-btn ">Edit</button>
                </form>
            </td>
            <td>
                <form action="{{route('product.delete',['product'=>$product])}}" method="post">
                    @csrf
                    @method("delete")
                    <input type="submit" value="Delete" class="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('product.create')}}" class="add-btn">ADD</a>
</body>
</html>
