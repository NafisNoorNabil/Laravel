<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/create.css"/>
</head>
<body>
    <h1>Edit A Product</h1>
    <form method="post" action="{{route('product.update',['product'=>$product])}}" >

        @csrf
        @method("put")
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description " value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>