<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/create.css"/>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl my-10 uppercase">Create A Product</h1>
    <form class="space-y-5" method="post" action="{{ route('product.store') }}"  >

        @csrf
        @method("post")
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Quantity">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" class=" mt-10" value="Save the New Product">
        </div>
    </form>
</body>
</html>