<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/buynow.css">
</head>
<body>

    <form method="post" action="{{ route('invoice.store') }}">
    <h1>{{ $productId->name }}</h1>
    @csrf
    <input type="hidden" name="product_id" value="{{ $productId->id }}">
    <div>
        <label for="">Username</label>
        <input type="text" name="name" placeholder="Enter Your Name">
    </div>
    <div>
        <label for="">Quantity</label>
        <input type="number" name="qty" placeholder="Quantity">
    </div>
    <div>
        <input type="submit" value="Order">
    </div>
</form>

</body>
</html>