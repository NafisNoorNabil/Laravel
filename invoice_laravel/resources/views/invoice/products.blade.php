<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/products.css">
</head>
<body>
<h1>Products</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Buy</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}} TK</td>
            <td>{{$product->description}}</td>
            <td>
                <a href="{{ route('invoice.buynow', ['productId' => $product->id]) }}">Buy Now</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>