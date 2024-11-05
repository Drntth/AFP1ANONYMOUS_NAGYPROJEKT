<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
</head>
<body>
    <h1>Edit a product</h1>
    <div>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" placeholder="Description" value="{{$product->description}}"></textarea>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="category_id">Category ID</label>
            <input type="text" name="category_id" id="category_id" placeholder="Category ID" value="{{$product->category_id}}">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" id="image" placeholder="Image description" value="{{$product->image}}">
        </div>
        <div>
            <label for="stock">Stock</label>
            <input type="text" name="stock" id="stock" placeholder="Stock" value="{{$product->stock}}">
        </div>
        <div>
            <button type="submit">Update product</button>
        </div>



    </form>
</body>
</html>