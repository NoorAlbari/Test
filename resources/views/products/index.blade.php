<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>List of Product</h1>
    <div>
        @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div><a href="{{route('product.create')}}">Create Record</a></div>
    <div>
        <table border="1">
            <tr>
              <th>ID</th>
              <th>Product Name</th>
              <th>Product Quantity</th>
              <th>Product Description</th>
              <th>Product Price</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('product.edit',['product'=> $product])}}">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{route('product.delete',['product'=>$product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
              </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
