<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if (session('success'))
            <div></div>{{session('success')}}</div>
        @endif
    </div>
    <div>
        <a href="{{route('product.add')}}">Add a new Product</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category ID</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->image}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>