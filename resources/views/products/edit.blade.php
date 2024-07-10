<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Edit a Product</h1>

    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="POST" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
        <div>
            <label>Product Name</label>
            <input type="text" name="name" placeholder="Enter Product Name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>Product Quantity</label>
            <input type="text" name="quantity" placeholder="Enter Product Quantity" value="{{$product->quantity}}"/>
        </div>
        <div>
            <label>Product Description</label>
            <input type="text" name="description" placeholder="Enter Product Description" value="{{$product->description}}"/>
        </div>
        <div>
            <label>Product Price</label>
            <input type="text" name="price" placeholder="Enter Product Price" value="{{$product->price}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>


</body>
</html>
